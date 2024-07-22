{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
@extends('layouts.app')
@section('title', 'CuboGame - login')
@section('class', 'login')

@section('content')
<header>
    <a href="javascript:;" class="btn-back">
        <img src="images/btn-back.svg" alt="Back">
    </a>
    <img src="images/title-login.svg" alt="">
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
    <form action="{{ route('login')}}" method="post">
        @csrf
        <div class="form-group">
            <label>
                <img src="images/ico-email.svg" alt="">
                Email:
            </label>
            <input type="email" name="email" placeholder="alfonso@gmail.com">
        </div>
        <div class="form-group">
            <label>
                <img src="images/ico-pass.svg" alt="">
                Password:
            </label>
            <img class="ico-eye" src="images/ico-eye.svg" alt="">
            <input type="password" name="password" placeholder="dontmesswithmydog">
        </div>
        <div class="form-group">
            <button type="submit">
                <img src="images/content-btn-login.png" alt="Login">
            </button>
            <a href="">Forgot your password</a>
        </div>
    </form>
</section>
@endsection

@section('js')
<script>
        $(document).ready(function () {
            $('header').on('click', '.btn-burger', function () {
                $(this).toggleClass('active')
                $('.nav').toggleClass('active')
            })

            $togglePass = false
            $('section').on('click', '.ico-eye', function () {
                !$togglePass ? $(this).next().attr('type', 'text')
                            : $(this).next().attr('type', 'password')
                !$togglePass ? $(this).attr('src', 'images/ico-eye-hidden.svg')
                            : $(this).attr('src', 'images/ico-eye.svg')
                $togglePass = !$togglePass
            })
        })
</script>

@if(count($errors->all()) > 0)
    @php
        $error = "";
    @endphp
    @foreach ($errors->all() as $message)
        @php
            $error.='<li>'.$message.'</li>'   
        @endphp
    @endforeach
    <script>
        $(document).ready(function() {
            Swal.fire({
                position: "top",
                title: "Ops!",
                html: '@php echo $error @endphp',
                icon: "error",
                toast: true,
                showConfirmButton: false,
                timer: 5000,
            })
        })
    </script>
@endif
@endsection