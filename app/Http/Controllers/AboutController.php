<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        return view('about');
    }

    private $person_data = array (
        'name'=>'khalaf',
        'age'=>23,
        'gender'=>'male'
    );

    public function PersonInfo() {
        return view ('about-person', ['person_data'=>$this->person_data]);
    }
}
