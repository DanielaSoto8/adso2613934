@extends('layouts.app')
@section('title', 'CuboGame - Welcome')
@section('class', 'welcome')

@section('content')
<header>
    <img src="images/logo-top.svg" alt="Logo">
</header>
<section class="owl-carousel owl-theme">
    <img src="{{ asset('images/Image-Welcome.png')}}" alt="slide01">
    <img src="{{ asset('images/Img-Welcome-2.png')}}" alt="slide02">
    <img src="{{ asset('images/Img-Welcome-3.png')}}" alt="slide03">
</section>
<footer>
    <a href="{{ url('catalogue')}}" class="btn btn-explore">
        <img src="{{ asset('images/content-btn-welcome.png')}}" alt="Explore">
    </a>
</footer>
@endsection

@section('js')
<script>
$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        responsive: {
            0: {
                items: 1
            }
        }
    })
})
</script>
@endsection