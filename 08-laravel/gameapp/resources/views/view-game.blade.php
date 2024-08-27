@extends('layouts.app')
@section('title', 'appMusic - View Artist')
@section('class', 'view-game')

@section('content')

<header>
    <a href="catalogue.html" class="btn-back">
        <img src="images/btn-back.svg" alt="Back">
    </a>
    <img src="images/title-song (2).svg" alt="">
    <svg class="btn-burger" viewBox="0 0 100 100" width="80">
        <path class="line top"
            d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
        <path class="line middle" d="m 70,50 h -40" />
        <path class="line bottom"
            d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
    </svg>

</header>
@include('menuburguer')
<img src="images/imgmusic.png" alt="Artits">
<article>
    <div class="row">
        <div class="column">
            <span class="main-font">Genre</span>
            <span class="second-font">Pop</span>
        </div>
        <div class="column">
            <p class="price">$59</p>
        </div>
    </div>
    <div class="row">
        <div class="column">
            <span class="main-font">Author:</span>
            <span class="second-font">Natalia Lafourcade</span>
        </div>
    </div>
    <div class="row">
        <div class="column">
            <span class="main-font">Year:</span>
            <span class="second-font">2017</span>
        </div>
    </div>
    <div class="row">
        <div class="column">
            <span class="main-font">Description:</span>
            <span class="second-font">Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </span>
        </div>
    </div>
</article>
<footer>
    <a href="listen.html">
        <img src="images/btn-play1.svg" alt="">
    </a>
  </footer>
</section>
@endsection

@section('js')
<script src="js/jquery-3.7.1.min.js"></script>

    <script>
        $(document).ready(function () {

            $('header').on('click', '.btn-burger', function () {
                $(this).toggleClass('active')
                $('.nav').toggleClass('active')
            })
        })

    </script>
@endsection