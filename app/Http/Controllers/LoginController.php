<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index()
    {
    	return view('login/home');

    }
    public function show($id)
    {
      # code...
      $nilaishow = 'ini nilai show ' .$id ;

      return view('login/single',['login' => $nilaishow]);

    }
}
