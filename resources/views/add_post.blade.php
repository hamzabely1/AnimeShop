@extends('layouts.app')


@section('content')



<form action="{{route('postadd')}}"  method="post">
    @csrf
<label for="">nom</label>
<input type="text" name="nom">
<label for="">image</label>
<input type="text" name="image" >
<label for="">prix</label>
<input type="text" name="prix">
<label for="">description</label>
<input type="text" name="description">
<input type="submit" value="confirme">

</form>



@endsection
