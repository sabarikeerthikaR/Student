<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Student;
use App\Models\Department;

class StudentController extends Controller
{
     function contact()
    {   
       
     return view('pages/contact');
      
    }
     function index()
    {   

         $data['page_title'] = "Login";
     return view('pages/login', $data);
      
    }
    function checklogin(Request $request)
    {
     $this->validate($request, [
      'email'   => 'required|email',
      'password'  => 'required|alphaNum|min:3'
     ]);
      
     $user_data = array(
      'email'  => $request->get('email'),
      'password' => $request->get('password')
     );

     if(Auth::attempt($user_data))
     {
      return redirect('/student');
     }
     else
     {
      return back()->with('error', 'Wrong Login Details');
     }

    }

    function successlogin()
    {
     return view('pages/student');
    }

    function logout()
    {
     Auth::logout();
     return redirect('/main');
    }

    function register()
    {
          $data['page_title'] = "Register";
        return view('pages/register',$data);
    }
    function registerData(Request $request)
    {
         $data['page_title'] = "Register";
       
        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            
        ]);
        $user->save();
       return view('pages/login' , $data);
    }
       function student(Request $request)
    {
         $data['page_title'] = "Student";
       $data["student"] = student::join('departments','student.department','=','departments.id')->select('student.name as name','departments.name as department','age','gender','address','student.id')->get();
        $search= $request->input('search');

    // Search in the title and body columns from the posts table
    $data['posts'] = Student::query()
        ->where('student.name', 'LIKE', "%{$search}%")
        ->orWhere('age', 'LIKE', "%{$search}%")
         ->orWhere('departments.name', 'LIKE', "%{$search}%")
          ->orWhere('gender', 'LIKE', "%{$search}%")
           ->orWhere('address', 'LIKE', "%{$search}%")
        ->join('departments','student.department','=','departments.id')->select('student.name as name','departments.name as department','age','gender','address','student.id')
        ->get();

         return view('pages.student', $data);
        // return $data;
    }
       function department()
    {
         $data['page_title'] = "Department";
        $data["department"] = Department::select('id','name')->get();

         return view('pages.department', $data);

    }

    function addstudent()
    {
        $data['page_title'] = "student";
          $data["department"] = Department::select('id','name')->get();
        return view('pages/addstudent', $data);
    }
     function studentdata(Request $request)
    {
         $data['page_title'] = "student";
        
        $student=Student::create([
            'name'=>$request->name,
            'department'=>$request->department,
             'age'=>$request->age,
            'gender'=>$request->gender,
             'address'=>$request->address,

        ]);
        $student->save();
         $data["student"] = student::join('departments','student.department','=','departments.id')->select('student.name as name','departments.name as department','age','gender','address','student.id')->get();
       
       return view('pages/student', $data);
    }
    function adddepartment()
    {
         $data['page_title'] = "Department";
        return view('pages/adddepartment',$data);
    }
     function departmentdata(Request $request)
    {

         $data['page_title'] = "department";
          
       
        $department=Department::create([
            'name'=>$request->name,
            
        ]);
        $department->save();
         $data["department"] = Department::select('id','name')->get();
       return view('pages/department',$data);
    }

     function studentshow(Request $request)
    {
         $data['page_title'] = "Student";
        $data['student'] = Student::where("student.id",$request->id)->join('departments','student.department','=','departments.id')->select('student.name as name','departments.name as department','age','gender','address','student.id')->first();
         $data["department"] = Department::select('id','name')->get();
         return view('pages/studentedit',$data);
    }

    function studentedit(Request $request)
    {
        $data['page_title'] = "Student";
         $data["student"] = student::join('departments','student.department','=','departments.id')->select('student.name as name','departments.name as department','age','gender','address','student.id')->get();
         $Student = Student::find($request->id);
         $Student->name=$request->name;
           $Student->department=$request->department;
            $Student->age=$request->age;
            $Student->gender=$request->gender;
             $Student->address=$request->address;
        $Student->update();
      
        return view('pages/student',$data);
    }
    

    function departmentshow(Request $request)
    {
         $data['page_title'] = "Department";
        $data['department'] = Department::find($request->id);
         return view('pages/departmentedit',$data);
    }
    function departmentedit(Request $request)
    {
         $data['page_title'] = "Department";
         $Department = Department::find($request->id);
        $Department->name= $request->name;
        $Department->save();
         $data["department"] = Department::select('id','name')->get();
        return view('pages/department',$data);
    }
    function studentdelete(Request $request)
    {
         $Student = Student::find($request->id);
         $Student->delete();
         return redirect('/student');
    }
   
}
     
    
   

