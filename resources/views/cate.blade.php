@extends('layouts.app')

@section('content')


<link rel="stylesheet" href="{{asset('css/home.css')}}">

<div class="row flex">
    @foreach ($cate as $key=>$cates)

          <div  class="qua col-md-3 d-flex flex-column shadow-lg p-3 mb-5 bg-body rounded">
              <p>{{$cates->nom}}</p>
            <img src={{$cates->image}}  style="height: 250px; width: 250px;" alt="">
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




