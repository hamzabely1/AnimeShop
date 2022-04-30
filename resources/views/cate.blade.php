@extends('layouts.app')

@section('content')

@foreach($cate as $cates)

<p>{{$cates->nom}}</p>

@endforeach

@endsection




