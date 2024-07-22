@extends('layouts.app')
@section('title', 'CuboGame - catalogue')
@section('class', 'catalogue')

@section('content')
<header>
    <a href="{{ url('/')}}" class="btn-back">
        <img src="images/btn-back.svg" alt="Back">
    </a>
    <img src="images/logo-top.svg" alt="Logo" class="logo-top">
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
<section class="scroll">
    <form action="" method="post">
        <input type="text" placeholder="Filter" maxlength="18">
    </form>
    <article>
        <h2>
            <img src="images/ico-category.svg" alt="Category">Play Station
        </h2>
        <div class="owl-carousel owl-theme">
            <figure>
                <img src="images/slide-c1-01.png" alt="" class="slide">
                <figcaption>Fc24</figcaption>
                <a href="{{ asset('view-game')}}" class="btn-more">
                    view
                </a>
            </figure>
            <figure>
                <img src="images/slide-c1-02.png" alt="" class="slide">
                <figcaption>Warzone</figcaption>
                <a href="{{ asset('view-game')}}" class="btn-more">
                    view
                </a>
            </figure>
            <figure>
                <img src="images/slide-c1-03.png" alt="" class="slide">
                <figcaption>Halo</figcaption>
                <a href="{{ asset('view-game')}}" class="btn-more">
                    view
                </a>
            </figure>
        </div>
    </article>
    <article>
        <h2>
            <img src="images/ico-category.svg" alt="Category">Xbox
        </h2>
        <div class="owl-carousel owl-theme">
            <figure>
                <img src="images/slide-c1-01.png" alt="" class="slide">
                <figcaption>Fc24</figcaption>
                <a href="{{ asset('view-game')}}" class="btn-more">
                    view
                </a>
            </figure>
            <figure>
                <img src="images/slide-c1-02.png" alt="" class="slide">
                <figcaption>Warzone</figcaption>
                <a href="{{ asset('view-game')}}" class="btn-more">
                    view
                </a>
            </figure>
            <figure>
                <img src="images/slide-c1-03.png" alt="" class="slide">
                <figcaption>Halo</figcaption>
                <a href="{{ asset('view-game')}}" class="btn-more">
                    view
                </a>
            </figure>
        </div>
    </article>
    <article>
        <h2>
            <img src="images/ico-category.svg" alt="Category">Nintendo
        </h2>
        <div class="owl-carousel owl-theme">
            <figure>
                <img src="images/slide-c1-01.png" alt="" class="slide">
                <figcaption>Fc24</figcaption>
                <a href="{{ asset('view-game')}}" class="btn-more">
                    view
                </a>
            </figure>
            <figure>
                <img src="images/slide-c1-02.png" alt="" class="slide">
                <figcaption>Warzone</figcaption>
                <a href="{{ asset('view-game')}}" class="btn-more">
                    view
                </a>
            </figure>
            <figure>
                <img src="images/slide-c1-03.png" alt="" class="slide">
                <figcaption>Halo</figcaption>
                <a href="{{ asset('view-game')}}" class="btn-more">
                    view
                </a>
            </figure>
        </div>
    </article>
</section>
@endsection

@section('js')
<script>
$(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                center: false,
                loop: true,
                dots: false,
                responsive: {
                    0: {
                        items: 2
                    }
                }
            })
            $('header').on('click', '.btn-burger', function () {
                $(this).toggleClass('active')
                $('.nav').toggleClass('active')
            })
        })
</script>
@endsection