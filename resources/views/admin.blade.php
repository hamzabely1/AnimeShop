@extends('layouts.app')

<link rel="stylesheet" href="{{asset('css/home.css')}}">

@section('content')

<h1>Mes Produit</h1>

<div style="display: flex;justify-content:center">
    <h4>Ajjiute une article</h4>
</div>

<div style="display: flex;justify-content:center">



<a href="{{route('add/page/post')}}"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
    <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
  </svg></a>


</div>
<br>
<div class="row flex">
    @foreach ($article as $key=>$articles)




          <div class="qua col-md-3 d-flex flex-column">
              <p>{{$articles->nom}}</p>
            <img src={{$articles->image}}  style="height: 250px; width: 250px;" alt="">


              <div>


              </div>


              <br>
          <form action="{{route('recuper_id')}} " method="post">
            @csrf
<input type="hidden" name="id" value="{{$articles->id}}">
<input type="submit" value="cancella">
          </form>

          </div>




    @endforeach
</div>






@endsection

