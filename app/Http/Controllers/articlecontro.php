<?php

namespace App\Http\Controllers;

use App\Models\article;
use Illuminate\Http\Request;

class articlecontro extends Controller
{
    public function index(){
$article =article::all();
return view('home',compact('article'));
    }
}
