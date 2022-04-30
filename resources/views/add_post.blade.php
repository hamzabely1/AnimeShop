@extends('layouts.app')


@section('content')



<form  action="{{route('postadd')}}"  method="post">





    @csrf

    <div style="display:flex;justify-content:center">
<div style="height:500px">

    <div class="mb-3">
<label for="">nom</label>
<br>
<input type="text" name="nom">
</div>


<div class="mb-3">

<label for="">image</label>
<br>
<input type="text" name="image" >
</div>

<div class="mb-3">

<label for="">prix</label>
<br>
<input type="text" name="prix">
</div>
<div class="mb-3">

<label for="">description</label>
<br>
<input type="text" name="description">
</div>

<select name="categoty" class="form-select" aria-label="Default select example">
    <option  selected>categori</option>
    <option  value="one piece">One piece</option>
    <option value="attack">L'Attaque des Titans</option>
    <option value="dragon">Dragon ball</option>
    <option value="naruto">Naruto</option>

  </select>
  <br>
<div style="display:flex;justify-content:center">



<input  class="btn btn-dark" type="submit" value="confirme">
</div>

</div>
</div>

</form>



@endsection
