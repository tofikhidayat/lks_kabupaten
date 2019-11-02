<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Study;
use App\User;
use App\StudyChild;

class PageController extends Controller
{
    public  function index() {
        $study = Study::all();
        return view('welcome', compact('study'));
    }

    public function viewStudent($id) {
        $user =  User::findOrFail($id);
        return view('page.user', compact('user'));
    }

    public function viewStudy($id) {
        $study  = Study::findorFail($id);
        $child = $study->child()->paginate(10); 
        return view('page.study', compact('study','child'));
    }
    public function studyViewer($id) {
        $study = StudyChild::findOrFail($id);
        $random =  StudyChild::get()->shuffle();
        return view('page.data-study',compact('study','random'));
    }

}
