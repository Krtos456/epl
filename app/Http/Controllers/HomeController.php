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
        $students= student::select(8);
        return view('students')->with('students',$students);
    }  
     public function getData(){
    return Student::select('*')->get();
     }

}
