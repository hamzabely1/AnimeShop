<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\category;
use Illuminate\Http\Request;

class articlecontro extends Controller
{
    public function index(){
$article=article::all();
   $categori=category::all();
return view('home',compact('article','categori'));




    }



}
