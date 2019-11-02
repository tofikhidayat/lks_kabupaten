<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\StudyChild;
use App\Study;
use App\Value;

class TeacherController extends Controller
{
    protected $temp_teacher =  1; 

    public function index() {
        return  view('teacher.index');
    }

    public function student() {
        $student =  User::paginate(10);
        return view('teacher.student', compact('student'));

    }

    public function study() {
        $study =  StudyChild::where('teacher_id',$this->temp_teacher)->paginate(10);
        return view('teacher.study', compact('study'));
    } 

    public function studyCreate() {
        $study =  Study::all();
        return view('teacher.study-view', compact('study'));
    } 

    public function studyMake($id) {
        $study = Study::findOrFail($id);

        return view('teacher.study-make', compact('study'));
    }

    public function studyStore(Request $request) {
        $request->validate([
            'image'=> 'file|required',
            'title'=> 'required',
            'description'=> 'required'
        ]);
        $file  =  $request->file('image');
        $fileName =  $file->getClientOriginalName();
        $file->storeAs('public', $fileName);

        StudyChild::create([
            'teacher_id'=> $this->temp_teacher,
            'title'=> $request->title,
            'description'=> $request->description,
            'image' => $fileName,
            'study_id'=> $request->study_id
        ]);
        return redirect()->route('teacher.study')->with('success','Berjasil menambah data pelajaran');

    }



    /**
     * Cur nilai
     */


    public function value() {
        $value  =  Value::paginate(20);
        return view('teacher.value', compact('value'));
    }

    public function valueCreate() {
        $user =  User::all();
        $study =  Study::all();
        return view('teacher.value-create', compact('user','study'));
    }

    public function valueStore(Request $request) {
        $request->validate([
            'study'=> 'required',
            'user'=> 'required',
            'value'=> 'required|integer'
        ]);
        Value::Create([
            'user_id'=> $request->user,
            'study_id'=> $request->study,
            'value'=> $request->value
        ]);
        return redirect()->route('teacher.value.index');
    }
}
