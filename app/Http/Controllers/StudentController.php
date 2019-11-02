<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class StudentController extends Controller
{
    public function index() {
        $user  =  User::find(1);
        return view('user.index');
    }

    public function value() {
        $value =  User::find(1)->values;
        return view('user.value', compact('value'));
    }
}
