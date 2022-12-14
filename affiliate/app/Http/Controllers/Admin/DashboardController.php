<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function index(){
   $totalUser=User::where('role_as', '!=', '1')->count();
   $generalUser=User::where('role_as', '=', '0')->count();
   $maxUser=User::orderBy('point', 'desc')->first();
    return view('admin.dashboard', compact('totalUser', 'generalUser', 'maxUser'));
   } 

   public function dashboardData(){
      $totalUser=User::where('role_as', '!=', '1')->count();
      $generalUser=User::where('role_as', '=', '0')->count();
      $maxUser=User::orderBy('point', 'desc')->first();
      return \response([
         'status' => 200,
         'message' => 'Success',
         'totalUser' => $totalUser,
         'generalUser' => $generalUser,
         'maxUser' => $maxUser
     ]);
   }
}
