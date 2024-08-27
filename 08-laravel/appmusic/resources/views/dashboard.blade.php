@extends('layouts.app')
@section('title', 'appmusic - dashboard')
@section('class', 'dashboard')

@section('content')
<header>
    <a href="javascript:;" class="btn-back">
        <img src="{{asset('images/btn-back.svg')}}" alt="Back">
    </a>
    <img src="{{asset('images/Dashboard.svg')}}" alt="Dashboard">
    <svg class="btn-burger" viewBox="0 0 100 100" width="80">
        <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
        <path class="line middle" d="m 70,50 h -40" />
        <path class="line bottom"
            d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
    </svg>
</header>
</header>
@include('menuburguer')
<section class="scroll">
    <article class="module">
        <aside>
            <img src="{{asset('images/user.svg')}}" alt="">
            <span class="rows">
                {{App\Models\User::count()}}Rows
            </span>
        </aside>
        <img src="{{asset('images/module_user.svg')}} " alt ="">
        <a class="view" href="{{url('users')}}"> <img src="images/view.svg" alt=""></a>
    </article>
    <article class="module">
        <aside>
            <img src="{{asset('images/song.svg')}}" alt="song Module">
            <span class="rows">
                {{App\Models\Song::count()}}Rows
            </span>
        </aside>
        <img src="{{asset('images/module-song.svg')}} " alt ="">
        <a class="view" href="{{url('songs')}}"> <img src="images/view.svg" alt=""></a>
    </article>
    <article class="module">
        <aside>
            <img src="{{asset('images/folder.svg')}}" alt="shared Module">
            <span class="rows">
                {{App\Models\Artist::count()}}Rows
            </span>
        </aside>
        <img src="{{asset('images/module_artists.svg')}} " alt ="">
        <a class="view" href="{{url('artist')}}"> <img src="images/view.svg" alt=""></a>
    </article>
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