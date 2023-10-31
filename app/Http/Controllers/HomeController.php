<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Student;

class HomeController extends Controller
{

    public function home(){
        return view('home');
    }

    public function students(){
       
       $data=Student::select('*')->get();
        return view('students')->with('students',$data);
    } 

     public function getData(){
    return Student::select('*')->get();
     }
}
