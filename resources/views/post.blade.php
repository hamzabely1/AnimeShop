@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/post.css') }}">

    <div class="boby">


        <div class="conta">
            <p style="display: flex;justify-content:center">{{ $article->nom }}</p>

            <img style="height: 500px" src="{{ $article->image }}" alt="">

            <div style="display: flex;justify-content:center;width:500px" class=" alert alert-primary" role="alert">
                <p>{{ $article->prix }}</p>

            </div>
            <div style=" width:500px" class="alert alert-primary" role="alert">


                <p>{{ $article->description }}</p>

            </div>
            @guest
                @if (Route::has('login'))
                @endif
            @else
                @if (Auth::user()->role == 0)
                    <form action="{{ route('panier_add') }}" method="POST">
                        @csrf


                        <input id="nom" type="hidden" name="nom" value="{{ $article->nom }}">
                        <input id="prix" type="hidden" name="prix" value="{{ $article->prix }}">
                        <input id="image" type="hidden" name="image" value="{{ $article->image }}">
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

    <script src="{{ asset('js/script.js') }}"></script>
@endsection
