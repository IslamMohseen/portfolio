<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AboutMe;

class homePage extends Controller
{
    public function index(){

        $aboutMe = AboutMe::all();

        return view('home',['aboutMe'=>$aboutMe]);
    }
}
