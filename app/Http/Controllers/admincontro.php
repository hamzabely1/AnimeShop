<?php

namespace App\Http\Controllers;

use App\Models\article;
use Illuminate\Http\Request;

class admincontro extends Controller
{
    public function index(){
        $article = article::all();
        return view('admin',compact('article'));
    }

    public function subrime(request $request){


        $dele =article::find($request->id);
        $dele->delete();
        return redirect()->route('home');


    }

}
