

@extends('layouts.app')


@section('content')

<link rel="stylesheet" href="{{ asset('css/post.css') }}">


<div class="boby">


    <div class="conta">
        <p style="display: flex;justify-content:center">{{ $request->nom }}</p>

        <img style="height: 500px" src="{{ $request->image }}" alt="">

        <div style="display: flex;justify-content:center;width:500px" class=" alert alert-primary" role="alert">
            <p>{{ $request->prix }}</p>

        </div>
        <div style=" width:500px" class="alert alert-primary" role="alert">


            <p>{{ $request->description }}</p>

        </div>
        @guest
            @if (Route::has('login'))
            @endif
        @else
            @if (Auth::user()->role == 0)
                <form action="{{ route('panier_add') }}" method="POST">
                    @csrf


                    <input id="nom" type="hidden" name="nom" value="{{ $request->nom }}">
                    <input id="prix" type="hidden" name="prix" value="{{ $request->prix }}">
                    <input id="image" type="hidden" name="image" value="{{ $request->image }}">
                    <div style="display: flex;justify-content:center">
                        <input onclick="store()" class="btn btn-danger -bottom-3" type="submit" value="ajioute au panier">
                    </div>
                    <br>
                </form>
            @endif



        @endguest




    </div>



</div>



</div>
</div>


@endsection
