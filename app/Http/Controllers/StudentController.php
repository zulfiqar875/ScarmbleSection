<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Course;

class StudentController extends Controller
{
    public function Register(Request $request)
    {
        $data = new Student();
        $data->Firstname = $request->fname;
        $data->Lastname = $request->lname;
        $data->Fathername = $request->fathername;
        $data->Studentnic = $request->scnic;
        $data->Age = $request->age;
        $data->Gender = $request->gender;
        $data->Address = $request->address;
        $data->Postalcode = $request->postcode;
        $data->City = $request->city;
        $data->Country = $request->country;
        $data->Contactno = $request->contact;
        $data->Email = $request->email;
        $data->Username = $request->username;
        $data->Password = $request->password;
        $data->SCid = $request->course;
        $data->save();
        // session::flash('Register','Successfully you register');
        return redirect()->back();
    }

    public function Login (Request $request)
    {
        $data = Student::where('Username',$request->username)->where('Password',$request->password)->first();
        if($data!=null)
        {
            $fetch = $data->Course;
            //  dd($fetch);
             return view ('portal', compact('data','fetch'));
        }
        else{
            
        }

    }
}
