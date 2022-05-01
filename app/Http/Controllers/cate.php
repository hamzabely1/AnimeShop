<?php

namespace App\Http\Controllers;

use App\Models\article;
use Illuminate\Http\Request;

class cate extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function one_piece()
    {
       $cate = article::where('categoty','one piece')->get();
       return view('cate',compact('cate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function attack()
    {
        $cate = article::where('categoty','attack')->get();
        return view('cate',compact('cate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function dragon()
    {
        $cate = article::where('categoty','dragon')->get();
        return view('cate',compact('cate'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function naruto()
    {
        $cate = article::where('categoty','naruto')->get();
       return view('cate',compact('cate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function info(request $request)
    {



return view('view', compact('request'));



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
