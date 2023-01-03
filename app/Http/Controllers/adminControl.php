<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class adminControl extends Controller
{
    public function show()
    {
      $output = Student::all(); 
      return view ('user.admin.projectlist', ['list'=>$output]);
    }

    public function addData(Request $req)
    {
        $output = new Student() ;
        $output->projecttype = $req->input('projecttype') ;
        $output->title = $req->input('title') ;
        $output->student = $req->input('student') ;
        $output->supervisor = $req->input('supervisor') ;
        $output->examiner1 = $req->input('examiner1') ;
        $output->examiner2 = $req->input('examiner2') ;
        $output->startdate = $req->input('startdate') ;
        $output->enddate = $req->input('enddate') ;
        $output->duration = $req->input('duration') ;
        $output->progress = $req->input('progress') ;
        $output->status = $req->input('status') ;
        $output->save() ;
        return redirect('projectlist') ;
    }

    public function update(Request $req)
    {
      $data=Student::find($req->id);
        $data->projecttype = $req->projecttype;
        $data->title = $req->title;
        $data->student = $req->student;
        $data->supervisor = $req->supervisor;
        $data->examiner1 = $req->examiner1;
        $data->examiner2 = $req->examiner2;
        $data->startdate = $req->startdate;
        $data->enddate = $req->enddate;
        $data->duration = $req->duration;
        $data->progress = $req->progress;
        $data->status = $req->status;
        $data->save() ;
        return redirect('projectlist') ;
    }

    function showStud($id){
      $data=Student::find($id);

      return view('user.admin.update',['disp'=>$data]);
    }
    
    public function delete($id)
    {
      $data=Student::find($id);
      $data->delete();
      return redirect('projectlist');
    }
}
