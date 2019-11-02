<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\user;

class AdminController extends Controller
{
    public function index() {
        $teacher  =  Teacher::all();
        $user =  User::all();
        return view('admin.index', compact('teacher','user'));
    }

  

    public function teacher() { 
        $teacher =  Teacher::paginate(10);
        return view('admin.teacher', compact('teacher'));
    }

    public function teacherCreate() {

        return view('admin.teacherCreate');
    }

    public function teacherStore(Request $request) {

        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:teachers',            
            'nuptk'=>'required',
            'address'=>'required',
            'password'=>'required'
        ]);

        Teacher::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'nuptk'=> $request->nuptk,
            'address'=> $request->address,
            'password'=> bcrypt($request->password),
        ]);

        return redirect()->route('admin.teacher')->with('success','Berhasil membuat guru baru');
    }

    public function teacherEdit($id) {
        $teacher  =  Teacher::findOrFail($id);
        return view('admin.teacherEdit', compact('teacher'));
    }

    public function teacherUpdate(Request $request) {
            $request->validate([
                'name'=>'required',
                'email'=>'required',            
                'nuptk'=>'required',
                'address'=>'required',
                'password'=>'required'
            ]);
            $teacher =  Teacher::findOrFail($request->id);
            $teacher->update([
                'name'=> $request->name,
                'email'=> $request->email,
                'nuptk'=> $request->nuptk,
                'address'=> $request->address,
                'password'=> bcrypt($request->password),
            ]);
    
            return redirect()->route('admin.teacher')->with('success','Berhasil memperbarui data guru');
    }

    public function teacherDelete($id) {
        $teacher =  Teacher::findOrFail($id);
        $teacher->delete();
        return redirect()->route('admin.teacher')->with('success','Berhasil menghapus data guru');
    }



    public function student() {
        $student =  User::paginate(10);
        return view('admin.student' , compact('student'));
    }

    public function studentCreate() {
        return view('admin.studentCreate');
    }


    public function studentStore(Request $request) {

        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:teachers',            
            'nis'=>'required',
            'address'=>'required',
            'password'=>'required'
        ]);

        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'nis'=> $request->nis,
            'address'=> $request->address,
            'password'=> bcrypt($request->password),
        ]);

        return redirect()->route('admin.student')->with('success','Berhasil membuat guru baru');
    }

    public function studentEdit($id) {
        $user  =  User::findOrFail($id);
        return view('admin.studentEdit', compact('user'));
    }

    public function studentUpdate(Request $request) {
            $request->validate([
                'name'=>'required',
                'email'=>'required',            
                'nis'=>'required',
                'address'=>'required',
                'password'=>'required'
            ]);
            $user =  User::findOrFail($request->id);
            $user->update([
                'name'=> $request->name,
                'email'=> $request->email,
                'nuptk'=> $request->nuptk,
                'address'=> $request->address,
                'password'=> bcrypt($request->password),
            ]);
    
            return redirect()->route('admin.student')->with('success','Berhasil memperbarui murid');
    }

    public function studentDelete($id) {
        $user =  User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin.teacher')->with('success','Berhasil menghapus data murid');
    }


}
