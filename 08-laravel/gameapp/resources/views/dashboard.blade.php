{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
@extends('layouts.app')
@section('title', 'CuboGame - dashboard')
@section('class', 'dashboard')

@section('content')
<header>
    <a href="javascript:;" class="btn-back">
        <img src="images/btn-back.svg" alt="Back">
    </a>
    <img src="images/title-dashboard.svg" alt="">
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
        <article class="module">
            <aside>
                <img class="icon" src="images/Img-User.svg" alt="">
                <span class="rows">20 Rows</span>
            </aside>
            <img class="title" src="images/title-module-users.svg" alt="">
            <a href="{{ url('users') }}">
                <img src="images/btn-enter.svg" alt="View">
            </a>
        </article>
        <article class="module">
            <aside>
                <img class="icon" src="images/Img-Categories.svg" alt="">
                <span class="rows">20 Rows</span>
            </aside>
            <img class="title" src="images/title-module-categories.svg" alt="">
            <a href="{{ url('categories') }}">
                <img src="images/btn-enter.svg" alt="View">
            </a>
        </article>
        <article class="module">
            <aside>
                <img class="icon" src="images/Img-Games.svg" alt="">
                <span class="rows">20 Rows</span>
            </aside>
            <img class="title" src="images/title-module-games.svg" alt="">
            <a href="{{ url('games') }}">
                <img src="images/btn-enter.svg" alt="View">
            </a>
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
        })
</script>
@endsection
