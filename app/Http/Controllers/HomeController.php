<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Student;
use App\models\Module;
use App\models\Menu;

class HomeController extends Controller
{
    public function getviews(){
        $menus=Menu::select('*')->get();
    }



    public function home(){
        $menus=Menu::select('*')->get();
        return view('home')->with(compact('menus'));
    }

    public function students(){
       
       $data=Student::select('*')->get();
       $menus=Menu::select('*')->get();
     
        return view('students')->with('students',$data)->with('menus',$menus);
    } 
    
public function modules(){
    $data=Module::select('*')->get();
    $menus=Menu::select('*')->get();  
    return view('modules')
    ->with('modules',$data)->with('menus',$menus);
}
public function SpecificModules($moduleName){
    $data =Module::where('programe',$moduleName)->get();
    $menus=Menu::select('*')->get();

    return view('modules')
    ->with('modules',$data)->with('menus',$menus);
}

public function studentDetails($studentID){
    
    $studentdata=Student::where('idstudents',$studentID)->get();
   $menus=Menu::select('*')->get();     
   
    return view('studentprofile',compact('studentdata'))->with('menus',$menus);
}

     public function getData(){
    return Student::select('*')->get()->comapct("menus");
     }
     
}
