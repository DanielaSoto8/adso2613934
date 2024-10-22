@extends('layouts.app')
@section('title', 'appmusic - show-artist')
@section('class', 'show-artist')

@section('content')
<header>
    <a href="{{ url('artists') }}" class="btn-back">
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
        <img src="{{asset('images') . '/' . $artist->photo}}" alt="Photo">


    </figure>
    <h2>{{$artist->fullname}}</h2>
    <span class="email">
        {{$artist->email}}
    </span>

    <div class="grid">
        <span class="icono">
            <img class="icono" src="{{ asset("images/documentos.png" ) }}" alt="Documento">
            {{$artist->document}}
        </span>
        <span class="icono">
            <img class="icono" src="{{ asset("images/direccion.png")}}" alt="Address">
            N/A
        </span>
        <span class="icono">
            <img class="icono" src="{{asset("images/phone-number.png") }}" alt="Phone Number">
            {{$artist->phone}}
        </span>

        <span class="icono">
            <img class="icono" src="{{asset("images/birth-date.png") }}" alt="Birth Date">
            {{$artist->birthdate }}

        </span>
        <span class="icono">
            <img class="icono" src="{{asset("images/genero.png") }}" alt="genero">
            {{$artist->genero }}

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