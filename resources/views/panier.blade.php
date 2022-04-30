@extends('layouts.app')

@section('content')
    @foreach ($panier as $paniers)
        <div class="card">
            <div class="card-body">



                <form action="{{route('subrime_artciles')}}">
                {{ $paniers->nom }}

                <img style="height:70px" src="{{ $paniers->image }}" alt="">



                {{ $paniers->prix }}$

<input type="hidden" name="id" value="{{$paniers->id}}">
<input class="btn btn-danger" type="submit" value="subrime">

                </form>


                </div>
            </div>
        </div>
    @endforeach




















    <script src="{{ asset('js/script.js') }}"></script>
@endsection
