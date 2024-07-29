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
@section('title', 'Gameapp - dashboard')
@section('class', 'dashboard')

@section('content')
<header>
    <a href="javascript:;" class="btn-back">
        <img src="images/btn-back.svg" alt="Back">
    </a>
    <img src="images/Dashboard.svg" alt="Dashboard">
    <svg class="btn-burger" viewBox="0 0 100 100" width="80">
        <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
        <path class="line middle" d="m 70,50 h -40" />
        <path class="line bottom"
            d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
    </svg>
</header>
</header>
@include('menuburguer')
<section>
            <article class="module module-users">
                <aside>
                    <img src="images/friends.svg" alt="Users Module">
                    <img src="images/rows.svg" >
                </aside>
                <aside>
                    <img src="images/module-artist.svg">
                    <a class="view"  href="./artist.html"> <img src="images/view.svg" alt="">                       
                        
                    </a>
                </aside>
            </article>
            <article class="module module-songs">
                <aside>
                    <img src="images/music.svg" >
                    <img src="images/rows.svg" >
                </aside>
                <aside>
                    <img src="images/module-song.svg">
                    <a class="view"  href="./song.html"> <img src="images/view.svg" alt="">                       
                        
                    </a>
                </aside>
            </article>
            <article class="module module-shared">
                <aside>
                    <img src="images/folder.svg">
                    <img src="images/rows.svg" >
                </aside>
                <aside>
                    <img src="images/module-shared.svg">
                    <a class="view"  href="/07-layout/users/users.html"> <img src="images/view.svg" alt="">                       
                        
                    </a>
                </aside>
            </article>
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