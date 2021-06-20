<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Routing\Controller as BaseController;

class StudentController extends BaseController
{
    public function store (Request $request){ //public/private/protected
        $data = $request->all();
        print_r($data['age']);
        dd($data['name']); 
        echo "this is student show details controller functions";
    }

    public function student  (){ 


        return view('student');
        //dd(999); //dump and die
        //echo "hey rohit nice to meet you!!!";
    }
}
