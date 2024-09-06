@extends('layouts.app')
@section('title', 'appmusic - show-song')
@section('class', 'show-song')

@section('content')
<header>
    <a href="{{ url('dashboard') }}" class="btn-back">
        <img src="{{ asset("images/btn-back.svg" ) }}" alt="Back">
    </a>
    <img src="images/My-Profile.svg" alt="">
    <svg class="btn-burger" viewBox="0 0 100 100" width="80">
        <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
        <path class="line middle" d="m 70,50 h -40" />
        <path class="line bottom"
            d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
    </svg>
</header>
@include('menuburguer')
<section>
    <figure class="avatar">
        <img src="{{asset('images') . '/' . $song->photo}}" alt="Photo">


    </figure>

    <span class="nombre_cancion">
        {{$song->nombre_cancion}}
    </span>

    
    <div class="grid">
    <span class="icono">

    <img class="icono" src="{{ asset("images/calendario.png" ) }}" alt="ano_publicacion">
        {{$song->ano_publicacion}}
    </span>
    
     <span class="icono">
            <img class="icono" src="{{ asset("images/user1.png" ) }}" alt="artista">
            {{$song->artista}}
        </span>
        <span class="icono">
            <img class="icono" src="{{ asset("images/genero.png")}}" alt="genero">
            {{$song->genero}}
        </span>
        
      

    </div>

</section>
@endsection

@section('js')
<script>
    $(document).ready(function () {

        $('header').on('click', '.btn-burger', function () {
            $(this).toggleClass('active')
            $('.nav').toggleClass('active')
        })
        //----------------------------       
    })
</script>
@endsection