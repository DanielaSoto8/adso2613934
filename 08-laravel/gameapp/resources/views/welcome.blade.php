@extends('layouts.app')
@section('title', 'appMusic - Welcome')
@section('class', 'welcome')

@section('content')
<header>
    <img src="images/logo-welcome.png" alt="logo">
</header>
<section class=" owl-carousel owl-theme">
    <img src="images/slide01.png" alt="slide01">
    <img src="images/slide2.jfif" alt="slide02">
    <img src="images/slide03.jpg" alt="slide03">
</section>
<footer>
    <a href="{{url('catalogue')}}" class="enter">
        <img src="images/content-btn-welcome.svg" alt="enter">
    </a>
</footer>

@endsection

@section('js')
<script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                }
            }  
            })
        }) 
    </script>
@endsection