<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    
    function insert1(Request $request)
    {
        $employeeName=$request->input('employee_name');
        $employeeEmail=$request->input('employee_email');
        $employeeDepartment=$request->input('employee_dept');

        $employee=new Employee_master;
        $employee->employee_name=$employeeName;
        $employee->employee_email=$employeeEmail;
        $employee->employee_dept=$employeeDepartment;
        $employee->save(); 
        
        return view('insert1');
    }
    
    
    function doDelete($id)
    {
        $employee=new Employee_master;
        $emp = $employee->find($id);
        $emp->delete();
        //dd($emp->employee_dept);
         return redirect('/emp/list');
        //return view('delete');
    }
    
    function doEdit($id)
    {
        $employee=new Employee_master;
        $emp=$employee->find($id);
        //$result['response']=$emp->all();
        $data['employeeId']=$emp->id;
        $data['employeeName']=$emp->employee_name;
        $data['employeeEmail']= $emp->employee_email;
        $data['employeeDepartment']= $emp->employee_dept;
        
       
        return view('edit',$data);
       
    }
    
    
    function edit1(Request $request)
    {
        $employeeName=$request->input('employee_name');
        $employeeEmail=$request->input('employee_email');
        $employeeDepartment=$request->input('employee_dept');
        $employeeId=$request->input('employee_id');

        $employee=new Employee_master;
        $data['employee_name']=$employeeName;
        $data['employee_email']=$employeeEmail;
        $data['employee_dept']=$employeeDepartment;
        $employee->where('id',$employeeId)->update($data);
        
        return redirect('/emp/list');
        
    }
    
}
