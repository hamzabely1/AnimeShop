<?php

namespace App\Http\Controllers;

use App\Http\Controllers\shop\Cartcontroller;
use App\Models\article;
use App\Models\panier;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;


class paniercontro extends Controller
{


    public function index(){
        $panier= panier::all();
        return view('panier',compact('panier'));
    }

  public function add(){
      return redirect()->route('home');
  }


}
