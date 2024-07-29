@extends('layouts.app')
@section('title', 'Gameapp - catalogue')
@section('class', 'catalogue')

@section('content')
<header>

<a href="{{ url('/')}}" class="btn-back">
        <img src="images/btn-back.svg" alt="Back">
    </a>
    <img src="images/logo-welcome.png" alt="" class="logo-top">
    <svg class="btn-burger" viewBox="0 0 100 100" width="80">
        <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
        <path class="line middle" d="m 70,50 h -40" />
        <path class="line bottom"
            d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
    </svg>
</header>
@include('menuburguer')
<section class="scroll">
            <form action="" method="post">
                <input type="text" placeholder="filter" maxlength="18">
            </form>
            <article>
                <p class="letter"> Rock:</p>
                <div class="owl-carousel owl-theme">
                    <figure>
                        <img src="images/image 1.png" alt="" class="slide">
                        <figcaption>Mi buen amor</figcaption>
                        <a href="view-game.html"><img src="images/Group 49.png" class="btn-more" alt="">
                        </a>
                    </figure>
                    <figure><img src="images/image 2.png" alt="" class="slide">Entre dos tierras<a
                            href="view-game.html"><img src="images/Group 49.png" class="btn-more" alt=""></a></figure>
                    <figure><img src="images/image 3.png" alt="" class="slide">Y al final <a href="view-game.html"><img
                                src="images/Group 49.png" class="btn-more" alt=""></a></figure>
                </div>
            </article>
            <article>
                <p class="letter"> Pop:</p>
                <div class="owl-carousel owl-theme">
                    <figure>
                        <img src="images/image 1.png" alt="" class="slide">
                        <figcaption>Mi buen amor</figcaption>
                        <a href="view-game.html"><img src="images/Group 49.png" class="btn-more" alt="">
                        </a>
                    </figure>
                    <figure><img src="images/image 2.png" alt="" class="slide">Entre dos tierras<a
                            href="view-game.html"><img src="images/Group 49.png" class="btn-more" alt=""></a></figure>
                    <figure><img src="images/image 3.png" alt="" class="slide">Y al final <a href="view-game.html"><img
                                src="images/Group 49.png" class="btn-more" alt=""></a></figure>
                </div>
            </article>
            <article>
                <p class="letter"> Baladas:</p>
                <div class="owl-carousel owl-theme">
                    <figure>
                        <img src="images/image 1.png" alt="" class="slide">
                        <figcaption>Mi buen amor</figcaption>
                        <a href="view-game.html"><img src="images/Group 49.png" class="btn-more" alt="">
                        </a>
                    </figure>
                    <figure><img src="images/image 2.png" alt="" class="slide">Entre dos tierras<a
                            href="view-game.html"><img src="images/Group 49.png" class="btn-more" alt=""></a></figure>
                    <figure><img src="images/image 3.png" alt="" class="slide">Y al final <a href="view-game.html"><img
                                src="images/Group 49.png" class="btn-more" alt=""></a></figure>
                </div>
            </article>
            </section>
@endsection

@section('js')
<script>
        $(document).ready(function () {
            //-----------------------
            $('.owl-carousel').owlCarousel({
                center: false,
                loop: true,
                margin: -30,
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