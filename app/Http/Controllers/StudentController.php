<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Course;
use App\Assigment;

class StudentController extends Controller
{
    public function php()
    {
        phpinfo();
    }
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
            $Assign = $data->Assigment;
            //  dd($fetch);
             return view ('portal', compact('data','fetch','Assign'));
        }
        else{
            
        }

    }

    public function uploadAsg (Request $request)
    {
        if($file = $request->file('file')){
            $name = $file->getClientOriginalName();
            if($file->move('Storage',$name)){
                $Assignment = new Assigment();
                $Assignment->SCid = $request->course;
                $Assignment->Tittle = $request->desc;
                $Assignment->Time = $request->date;
                $Assignment->Solution = ' ';
                $Assignment->File = $name;
                $Assignment->Save();
                return redirect()->back();
            }

        }

        // $file = $request->file('file');
        // $filename = $file->getClientOriginalName();
        // $filenmae = time(). '.' . $filename;

        // $path = $file->storeAs('public',$filename);
        // $Assignment = new Assigment();
        // $Assignment->SCid = $request->course;
        // $Assignment->Tittle = $request->desc;
        // $Assignment->Time = $request->date;
        // $Assignment->File = $filenmae;
        // $Assignment->Save();
        // return redirect()->back();

    }

    public function uploadAsgStd( Request $request, $filename)
    {

        if($file = $request->file('file')){
            $name = $file->getClientOriginalName();
            if($file->move('AssignSol',$name)){
                $user = Assigment::where('File', $filename)->update(array('Solution'=>$name));
                return redirect()->back();
            }

            // $user = Assigment::where('File', $$filename)->update(array('Solution'=>'$nmae'));

        }
    }
    public function uploadCou (Request $request)
    {
        $course = new Course();
        $course->SCid    = $request->course;
        $course->Tittle  = $request->tittle;
        $course->Content = $request->address;
        $course->Save();
        return redirect()->back();
    }

    public function download ($File)
    {
        return response()->download('Storage/'. $File);
    }
}
