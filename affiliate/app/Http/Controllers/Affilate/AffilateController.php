<?php

namespace App\Http\Controllers\Affilate;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AffilateController extends Controller
{
    public function index(){
        $userId=Auth::user()->id;
        $user=User::where('id', $userId)->get();
        return view('affiliate.index', compact('user'));
    }

    public function referUsers(){
       $userId=Auth::user()->id;
        $referUsers=User::where('refer_id', $userId)->get();
        return view('affiliate.refer', compact('referUsers'));
    }


   
}
