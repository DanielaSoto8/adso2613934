@extends('layouts.app')
@section('title', 'Gameapp - my-profile')
@section('class', 'my-profile')

@section('content')
<header>
    <a href="{{ url('dashboard') }}" class="btn-back">
        <img src="images/btn-back.svg" alt="Back">
    </a>
    <img src="images/My-Profile.svg" alt="">
    <svg class="btn-burger" viewBox="0 0 100 100" width="80">
        <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
        <path class="line middle" d="m 70,50 h -40" />
        <path class="line bottom" d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
    </svg>
</header>
@include('layouts.menuburguer')
<section>
            <figure class="avatar" >
                <img  src="" alt="">

                <img  src="images/photo.png" alt="Photo">
                
            </figure>



            <h3>{{Auth::user()->fullname}}</h3>
            <div class="grid">
                <span class="icono">
                    <img class="icono" src="images/direccion.png" alt="Address">
                 <b>{{Auth::user()->Address}}</b>
                    
                </span>
                <span class="icono">
                    <img class="icono" src="images/phone-number.png" alt="Phone Number">
                    <b>{{Auth::user()->PhoneNumber}}</b>
                </span>
                <span class="data data-birth-date">
                    <img class="icono" src="images/birth-date.png" alt="Birth Date">
                    <b>{{Auth::user()->BirtDate }}</b>
                
                </span>
                <span class="data data-gender">
                    <img class="icono" src="images/documentos.png" alt="Documento">
                    <b>{{Auth::user()->Documento}}</b>
                </span>
            </div>
        </section>
@endsection

@section('js')
<script>
$(document).ready(function () {
            
            $('header').on('click', '.btn-burger', function(){
            $(this).toggleClass('active')
            $('.nav').toggleClass('active')
            })
        //----------------------------       
        })
</script>
@endsection