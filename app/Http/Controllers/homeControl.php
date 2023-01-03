<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class homeControl extends Controller
{
    //
    public function index()
    {
        return view('home');
    }

    public function redirectFunct()
    {
        if(Auth::id())
        {
            $typeuser = Auth::user()->usertype;

            if($typeuser=='1')
            {
                return view('user.admin.adminpage');
            }
            else if($typeuser=='2')
            {
                return view('user.admin.coorpage');
            }
            else if($typeuser=='3')
            {
                return view('user.admin.supervisor');
            }
            else if($typeuser=='4')
            {
                return view('user.admin.studentpage');
            }
            else
            {
                return view('user.unassigned');
            }

        }
        else
        {
            return view('home');
        }
    }

    public function user()
    {
        $data = user::all();
        return view('user.listdisplay', compact("data"));
    }
}
