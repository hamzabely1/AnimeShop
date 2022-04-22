<?php

namespace App\Http\Controllers;

use App\Http\Controllers\shop\Cartcontroller;
use App\Models\article;
use Illuminate\Http\Request;


class postcontro extends Controller
{
public function index($id){
    $article =article::find($id);
    return view('post',compact('article','id'));

}


}

