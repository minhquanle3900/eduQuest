<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    // public function index() {
    //     return view('admin.share.master');
    // }
    public function index1() {
        return view('students.share.master');
    }
    public function index2() {
        return view('teachers.share.master');
    }
    public function index3() {
        return view('dean.share.master');
    }
}
