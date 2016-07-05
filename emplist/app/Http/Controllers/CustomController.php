<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Student;
use App\Employee_master;

class CustomController extends Controller
{
    function Index()
    {
        echo "custom controller";
        
    }
    
    function sayName($name="no name")
    {
        echo "hello $name <br/>";
    }
    
    
    function First()
    {
        $data['title']="hello";
        $data['content']="mysql 5.6  php 5.5.9";
        return view('first',$data);
    }
    
    function ListStudent()
    {
        $result= Student::all();
       
        dd($result);
    }
    
    function insertStudent()
    {
        $student1=new Student();
        //$student1->insert(array('student_name'=>'shivu','roll_number'=>'1ce08cs101'));
        $student1->student_name='shashi';
        $student1->roll_number='1ce09cs023';
        $student1->save();
    }
    
    
    
    function listEmployee()
    {
        $employee=new Employee_master;
        $result['response']= $employee->all();
        return view('list',$result);
    }
    
    function insertEmployee()
    {
        $employee=new Employee_master;
        $employee->employee_name='amitha';
        $employee->employee_email='amitha@gmail.com';
        $employee->employee_dept='ECE';
        $employee->save();
        
    }
    
    function doInsert()
    {
        //echo "Insert Page";
               
        return view('insert');
         
    }
    
    function insert1()
    {
        //$employee=$this->doInsert();
        //$employee=new Employee_master;
        //$result['respose']=$employee->all();
        return view ('insert1');
    }
    
}
