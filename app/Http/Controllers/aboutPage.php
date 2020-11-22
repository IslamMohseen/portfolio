<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;
use App\Exeperience;
use App\Education;
use App\AboutMe;

class aboutPage extends Controller
{
    public function index(){
        $skills= Skill::all();
        $exeperiences = Exeperience::all()->sortByDESC('date_from');
        $educations = Education::all()->sortBy('date');
        $aboutMe = AboutMe::find(1);

        return view('about' ,['skills'=>$skills,'exeperiences'=>$exeperiences, 'educations'=>$educations, 'aboutMe'=>$aboutMe]);
    }
}

