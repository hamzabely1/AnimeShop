<?php

namespace App\Http\Controllers;

use App\Http\Controllers\shop\Cartcontroller;
use App\Models\article;
use App\Models\panier;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class paniercontro extends Controller
{


    public function index(){
        $panier= panier::all();
        $prix = panier::where('prix')->get();
        return view('panier',compact('panier','prix'));
    }

  public function add(Request $request){


$panier = new \App\Models\panier();

        $panier->nom = $request->nom;
        $panier->image = $request->image;
        $panier->prix= $request->prix;
        $panier->save();

        return redirect()->route('home');

}




public function subrime (request $request){

    $dele =panier::find($request->id);
        $dele->delete();
        return redirect()->route('home');

}



public function prix(){


    $prix = panier::where('prix')->get();
redirect()->route('panier',compact('prix'));

}



}
