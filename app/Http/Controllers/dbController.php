<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;
use App\Models\subject;
use App\Models\classe;
use App\Models\faculty;
use App\Models\student;
use App\Models\classsubject;
use App\Models\checkattendance;

class dbController extends Controller
{
    public function course(Request $req)
    {
        if ($req->input('submit'))
        {
            $c=$req->input('c');
            $d=$req->input('d');
            $ob=new course();
            
            $ob->course=$c;
            $ob->description=$d;
            $ob->save();
          
        }
        $ob=new course();
        $data=$ob->all();
//        print_r($data);
        return view('course',["data"=>$data]);
    }

    public function editcourse(Request $req)
{
    if($req->input('editid'))
        {
            $id=$req->input('editid');
            $dt=course::find($id);

            $rs=json_decode(json_encode($dt),true);
            //print_r($rs);
            return view('editcourse',["data"=>$dt]);
        }
        else
        {
            $id=$req->input('id');
            $description=$req->input('d');
            $course=$req->input('c');

            $data=course::find($id);
            $data->id=$id;
            $data->course=$course;
            $data->save();
            return redirect('/course');
        }
    }


    public function deletecourse(Request $req)
    {
        $id=$req->input('delid');
        //echo "<br>Delete Record  $id";
        course::find($id)->delete();
        return redirect('/course');
    }

    public function subject(Request $req){
        if($req->input('submit'))
        {
            $s=$req->input('s');
            $d=$req->input('d');
            $ob=new subject();

            $ob->subject=$s;
            $ob->description=$d;
            $ob->save();
        }
        $ob=new subject();
        $data=$ob->all();
        return view('subject',["data"=>$data]);
    }

    public function deletesubject(Request $req)
    {
        $id=$req->input('delid');
        //echo "<br>Delete Record  $id";
        subject::find($id)->delete();
        return redirect('/subject');
    }

    public function editsubject(Request $req)
{
    if($req->input('editid'))
        {
            $id=$req->input('editid');
            $dt=subject::find($id);

            $dt=json_decode(json_encode($dt),true);
            //print_r($rs);
            return view('editsubject',["data"=>$dt]);
        }
        else
        {
            $id=$req->input('id');
            $subject=$req->input("s");

            $data=subject::find($id);
            $data->id=$id;
            $data->subject=$subject;
            $data->save();
            return redirect('/subject');
        }
    }

    public function class(Request $req){
        if($req->input('submit'))
        {
            $sel=$req->input('sel');
            $l=$req->input('l');
            $s=$req->input('s');

            $ob=new classe();

            $ob->course=$sel;
            $ob->level=$l;
            $ob->section=$s;
            $ob->save();

        }
        $ob=new classe();
        $data=$ob->all();
        return view('/class',["data"=>$data]);
    }

    public function editclass(Request $req){
        if($req->input('editid'))
        {
            $id=$req->input('editid');
            $dt=classe::find($id);
    
            $dt=json_decode(json_encode($dt),true);
            // print_r($rs);
            return view('/editclass',["data"=>$dt]);
        }
        else 
        {
            $id=$req->input('id');
            $course=$req->input('c');
            $level=$req->input('l');
            $section=$req->input('s');
    
            $data=classe::find($id);
            $data->id=$id;
            $data->course=$course; 
            $data->level=$level;
            $data->section=$section;
            $data->save();
            return redirect('/class');
        }
        
    }

    public function deleteclass(Request $req){
        $id=$req->input('delid');
        print_r($id);
        classe::find($id)->delete();
        return redirect('/class');
    }


    public function faculty(Request $req)
    {
        if($req->input('submit'))
        {
            $id=$req->input('id');
            $n=$req->input('n');
            $e=$req->input('e');
            $c=$req->input('c');
            $a=$req->input('a');
            $p = rand(9999,1000);//password
            $s=$req->input('s');
            $ob=new faculty();

            $ob->id=$id;
            $ob->name=$n;
            $ob->email=$e;
            $ob->contact=$c;
            $ob->password=$p;
            $ob->address=$a;
            $ob->subject=$s;

            $ob->save();
            
        }   
        $ob=new faculty();
        $data=$ob->all();
        $ob1=new subject();
        $data1=$ob1->all();
        return view('/faculty',["data"=>$data,"data1"=>$data1]); 
            
       
    }

    public function editfaculty(Request $req){
        if($req->input('editid'))
        {
            $id=$req->input('editid');
            $dt=faculty::find($id);
            $dt=json_decode(json_encode($dt),true);
            return view('editfaculty',["data"=>$dt]);
        }
        else{
            $id=$req->input('id');
            $name=$req->input("n");
            $contact=$req->input("c");
            $address=$req->input("a");

            $data=faculty::find($id);
            $data->id=$id;
            $data->name=$name;
            $data->contact=$contact;
            $data->address=$address;
            $data->save();
            return redirect( '/faculty' );
        }
       
    }

    public function deletefaculty(Request $req)
    {
        $id=$req->input('delid');
        print_r($id);
        faculty::find($id)->delete();
        return redirect('/faculty');
        // return view( '/deletefaculty');
    }

    public function student(Request $req){
        if($req->input('submit'))
        {
            $id=$req->input('id');
            $name=$req->input('n');
            $sel=$req->input('select');

            $ob=new  student();
            $ob->id=$id;
            $ob->name=$name;
            $ob->class=$sel;
            $ob->save();
        }
        $ob=new student();
        $data=$ob->all();
        return view( '/student',["data"=>$data]);
    }

    public function editstudent(Request $req){
        if($req->input('editid'))
        {
            $id=$req->input('editid');
            $dt=student::find($id);
            
            $dt=json_decode(json_encode($dt),true);
            return view("/editstudent", ["data"=>$dt] );
        }
        else
        {
            $id=$req->input('id');
            $name= $req->input('n');
            $class = $req->input("select");

            $data=student::find($id);
            $data->id=$id;
            $data->name=$name;
            $data->class=$class;
            $data->save();
            return redirect( '/student');
        }
    }

    public function deletestudent(Request $req){
        $id=$req->input('delid');
        student::find($id)->delete();
        return redirect('/student');
    }

    public function classsubject(Request $req){
        if($req->input('submit'))
        {
            $class=$req->input('cla');
            $faculty=$req->input('fac');
            $subject=$req->input('sub');

            $ob=new classsubject();
            
            $ob->class=$class;
            $ob->faculty=$faculty;
            $ob->subject=$subject;
            $ob->save();
            
        }
        $ob=new classsubject();
        $data=$ob->all();
        return view('/class_subject',["data"=>$data]); 
       
    }

    public function delete_class_subject(Request $req)
    {
        $id=$req->input('delid');
        classsubject::find($id)->delete();
        return redirect('/class_subject');
    }

    public function edit_class_subject(Request $req)
    {
        if($req->input('editid'))
        {
            $id=$req->input('editid');
            $dt=classsubject::find($id);

            $dt=json_decode(json_encode($dt),true);
            return view("/edit_class_subject",["data"=>$dt]);
        }
        else{
            $id=$req->input('id');
            $class=$req->input('select');
            $faculty=$req->input('fac');
            $subject=$req->input('sub');

            $data=classsubject::find($id);
            $data->id=$id;
            $data->class=$class;
            $data->faculty=$faculty;
            $data->subject=$subject;
            $data->save();
            return redirect('/class_subject');
        }
       
    }

    public function checkAttendance(Request $req){
        $data2 = [];
    
        if($req->input('submit')) {
            $s = $req->input('s');
            $data2 = student::where('subject', $s)->get();
            json_decode(json_encode($data2), true);
        }
        if($req->input('submit1'))
        {
            $a = $req->input();
            
            foreach($a as $k => $n)
            {
                echo "<br>$k   -     $n";
        
                if($k=="submit1")
                {}
                else
                {
                $d=date('d-m-y');
                $t=date('h:i:s');
                $dt=$d." ".$t;
                $ob=new check();
                $ob->sid=$k;
                $ob->st=$n;
                $ob->dt=$dt;
                $ob->save();
                }
              }
            }
            $ob1 = new subject();
            $data1 = $ob1->all();
        
            return view('checkAttendance', ["data2" => $data2, "data1" => $data1]);
    }
    
    
}

