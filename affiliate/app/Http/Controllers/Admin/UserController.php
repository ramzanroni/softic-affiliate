<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('role_as', '==', '0')->get();
        return view('admin.users', compact('users'));
    }

    public function roleChange($id)
    {
        $user = User::find($id);
        if ($user->role_as == 0) {
            $user->role_as = '2';
            $user->save();
            return redirect('admin/users')->with('message', 'Make user Affiliation success');
        }
        if ($user->role_as == 2) {
            $user->role_as = '0';
            $user->save();
            return redirect('admin/users')->with('message', 'Make general user success');
        }
    }

    public function affilateUsers()
    {
        $users = User::where('role_as', '=', '2')->orderBy('point', 'DESC')->get();
        return view('admin.afflateuser', compact('users'));
    }




    public function affilateUsersApi(){
        
        try {
            $users = User::where('role_as', '=', '2')->orderBy('point', 'DESC')->get();
            return \response([
                'status' => 200,
                'message' => 'Success',
                'affilationUsers' => $users

            ]);
        } catch (\Exception $ex) {
            return \response([
                'message' => $ex->getMessage()
            ]);
        }
    }
    public function generalUser()
    {
        try {
            $users = User::where('role_as', '==', '0')->get();
            return \response([
                'status' => 200,
                'message' => 'Success',
                'generalUsers' => $users

            ]);
        } catch (\Exception $ex) {
            return \response([
                'message' => $ex->getMessage()
            ]);
        }
    }

    public function roleChangeApi($id)
    {
        if($id==1){
            return \response([
                'status' => 404,
                'message' => 'This is admin account'    
            ]);
        }
        $user = User::find($id);
        if ($user) {
            if ($user->role_as == 0) {
                $user->role_as = '2';
                $user->save();
                return \response([
                    'status' => 200,
                    'message' => 'Make Affliation Success'    
                ]);
            }
            if ($user->role_as == 2) {
                $user->role_as = '0';
                $user->save();
                return \response([
                    'status' => 200,
                    'message' => 'Make General Success'    
                ]);
            }
        } else {
            return \response([
                'message' => "data not found"
            ]);
        }
    }
    public function addUser(Request $request){
       if(strlen($request->password)>8 || $request->password==''){
        return \response([
            'message' => "Password must be not null and must be 8 character "
        ]);
        if($request->name=='' || $request->email==''){
            return \response([
                'message' => "Name and email can not be null"
            ]);
        }
       }

        try {
            if ($request->unique_id != '') {
                $find = User::find($request->unique_id);
                $find->point = $find->point + 22;
                $find->refer_id= $find->id;
                $find->save();
            }
            $result = uniqid();
            $addUser= User::create([
                'name' =>  $request->name,
                'email' =>  $request->email,
                'password' => Hash::make($request->password),
                'unique_id' => $result,
            ]);
            $addUser->save();
            return \response([
                'message' => "Create account success"
            ]);
        } catch (\Exception $ex) {
            return \response([
                'message'=>$ex->getMessage()
            ]);
        }
    }
}
