@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{asset('css/home.css')}}">

<img class="img-fluid" src="{{ asset('img/hom.jpg') }}" alt="">

<div class="mama" style="background-color: gainsboro;height:300px">

    <h1 class="categori" style="display: flex;justify-content:center">categories</h1>
    <div class="ma">
<a href="{{route('view_cate')}}"><img class='m' style="height: 180px;border-radius:10px" src="{{ asset('img/cate1.jpg') }}"
            class="rounded float-start " alt="...">
        </a>

        <img class='m' style="height: 180px;border-radius:10px" src="{{ asset('img/cate2.webp') }}"
            class="rounded float-center" alt="...">
        <img class='m' style="height: 180px;border-radius:10px" src="{{ asset('img/cate3.jpg') }}"
            class="rounded float-center" alt="...">
        <img class='m' style="height: 180px;border-radius:10px;" src="{{ asset('img/cate4.jpg') }}"
            class="rounded float-center" alt="...">
    </div>
    </div>

<div style="display:flex; justify-content:space-around">
    @foreach ($categori as $categoris )


    <a href=""><h4>{{$categoris->nom}}</h4></a>

    @endforeach

</div>

    <h2 style="display: flex;justify-content:center">En évidence</h2>



<div class="row flex">
    @foreach ($article as $key=>$articles)

          <div  class="qua col-md-3 d-flex flex-column shadow-lg p-3 mb-5 bg-body rounded">
              <p>{{$articles->nom}}</p>
            <img src={{$articles->image}}  style="height: 250px; width: 250px;" alt="">
<br>
            <a style="text-decoration: none;color:black" href="post/{{$key = $key +1 }}"> <div id="quaa"><button type="button" class="btn btn-pericolo"


              <div>
              info
              </div>
</a>

              <br>
          </div>



    @endforeach
</div>

@endsection
