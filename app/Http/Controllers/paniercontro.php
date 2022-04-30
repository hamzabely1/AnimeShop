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

  public function add(Request $request){


$panier = new \App\Models\panier();

        $panier->nom = $request->nom;
        $panier->image = $request->image;
        $panier->prix= $request->prix;
        $panier->save();

        return redirect()->route('home');

}




public function subrime(request $request){
    $dele =panier::find($request->id);
    $dele->delete();
    return redirect()->route('panier');
}

public function deledtous(){
    $ded = panier::all();
    $ded ->delete();

}


}
