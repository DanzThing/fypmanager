<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class homeControl extends Controller
{
    //
    public function index(){
        return view('home');    
    }

    public function redirectFunct(){
        $typeuser=Auth::user()->usertype;

        if($typeuser=='1')
        {
            return view('user.admin.adminpage');
        }

        else if($typeuser=='2'){
            return view ('user.supervisor.svpage');
        }

        else{
            return view('user.unassigned');
        }
    }
}
