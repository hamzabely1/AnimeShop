@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/post.css') }}">

    <div class="boby">


        <div class="conta">
            <p style="display: flex;justify-content:center">{{ $article->nom }}</p>

            <img style="height: 600px" src="{{ $article->image }}" alt="">


            <p>{{ $article->prix }}</p>

            <p>{{ $article->description }}</p>

            @guest
                @if (Route::has('login'))


                @endif
                @else
                    @if (Auth::user()->role == 0)
                        <form action="{{route('panier_add')}}" method="POST">
                            @csrf


                            <input type="hidden" name="id" value="{{ $article->id }}">
                            <input id="nom" type="hidden" name="nom" value="{{ $article->nom }}">
                            <input id="prix" type="hidden" name="prix" value="{{ $article->prix }}">
                            <input  id="image" type="hidden" name="image" value="{{ $article->image }}">
                            <input onclick="store()" class="btn btn-danger -bottom-3" type="submit" value="ajioute au panier">

                        </form>




                    @endif



                @endguest




        </div>



    </div>



    </div>
    </div>

    <script src="{{asset('js/script.js')}}"></script>

@endsection
