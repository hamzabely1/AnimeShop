@extends('layouts.app')

@section('content')






@foreach ($panier as $paniers)

<div class="card">
    <div class="card-body">



{{$paniers->nom}}

<img style="height:70px" src="{{$paniers->image}}" alt="">


{{$paniers->prix}}$

<div class="bnt btn-danger">subrime</div>



    </div>


  </div>




@endforeach




















<script src="{{asset('js/script.js')}}"></script>
@endsection
