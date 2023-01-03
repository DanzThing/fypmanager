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
                return view('user.admin.supervisor');
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

    /*public function user()
    {
        $data = user::all();
        return view('admin.adminpage', compact("data"));
    }*/

   public function create()
   {
        $lecturers = User::all();
        return view('admin.adminpage', compact('lecturers')); 
   }

   public function store(Request $request)
   {
        $project = new Project;
        $project->title = $request->title;
        $project->start_date = $request->start_date;
        $project->end_date = $request->end_date;
        $project->duration = $request->duration;
        $project->milestone_1 = $request->milestone_1;
        $project->milestone_2 = $request->milestone_2;
        $project->final_report = $request->final_report;
        $project->status = $request->status;
        $project->student_id = $request->student_id;
        $project->supervisor_id = $request->supervisor_id;
        $project->examiner_1_id = $request->examiner_1_id;
        $project->examiner_2_id = $request->examiner_2_id;
        $project->save();
        return redirect()->route('projects.index');
   }
}
