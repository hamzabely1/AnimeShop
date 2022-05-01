@extends('layouts.app')

@section('content')


<link rel="stylesheet" href="{{asset('css/home.css')}}">

<div class="row flex">
    @foreach ($cate as $key=>$cates)

          <div  class="qua col-md-3 d-flex flex-column shadow-lg p-3 mb-5 bg-body rounded">
              <p>{{$cates->nom}}</p>
            <img src={{$cates->image}}  style="height: 250px; width: 250px;" alt="">
<br>


<form action="{{route('info')}}">


<input type="hidden"   name="id" value="{{$cates->id}}">
<input type="hidden" name="nom" value="{{$cates->nom}}">

<input type="hidden" name="image" value="{{$cates->image}}">
<input type="hidden" name="prix" value="{{$cates->prix}}">
<input type="hidden" name="description" value="{{$cates->description}}">









            <input class="btn btn-dark" type="submit" value="info">

</form>
     <br>
          </div>



    @endforeach
</div>

@endsection




