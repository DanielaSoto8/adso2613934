@extends('layouts.app')
@section('title', 'CuboGame - View Game')
@section('class', 'view-game')

@section('content')
<header>
    <a href="{{ asset('/catalogue')}}" class="btn-back">
        <img src="images/btn-back.svg" alt="Back">
    </a>
    <h1>Halo 2</h1>
    <svg class="btn-burger" viewBox="0 0 100 100" width="80">
        <path
            class="line top"
            d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
        <path
            class="line middle"
            d="m 70,50 h -40" />
        <path
            class="line bottom"
            d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
    </svg>
</header>
@include('menuburguer')
<section>
    <img src="images/image-game.png" alt="Game">
    <article>
        <div class="row">
            <div class="column">
                <h4>Sci-fi</h4>
                <p>Xbox</p>
            </div>
            <div class="column">
                <p class="price">$59</p>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <h4>Year</h4>
                <p>2004</p>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <h4>Description</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error harum fugiat architecto sit nostrum provident dignissimos, natus veritatis, pariatur rem maxime qui, facilis in! </p>
            </div>
        </div>
    </article>
    <footer>
        <a href="{{ asset('view-game')}}">
            <img src="images/content-btn-collection.svg" alt="">
        </a>
    </footer>
</section>
@endsection

@section('js')
<script>
$(document).ready(function () {
            $('header').on('click', '.btn-burger', function () {
                $(this).toggleClass('active')
                $('.nav').toggleClass('active')
            })
        })
</script>
@endsection