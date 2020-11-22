<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
class portfolioController extends Controller
{
    public function index(){
        $portfolios =Portfolio::all();
        return view('portfolio',['portfolios'=>$portfolios]);
    }
}
