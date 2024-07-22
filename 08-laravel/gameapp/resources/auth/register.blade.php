@extends('layouts.app')
@section('title', 'CuboGame - register')
@section('class', 'register')

@section('content')
<header>
    <a href="javascript:;" class="btn-back">
        <img src="images/btn-back.svg" alt="Back">
    </a>
    <img src="images/title-register.svg" alt="">
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
    <form action="{{ route('register')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <img id="upload" class="mask" src="images/upload-photo.svg" alt="">
            <img  class="border" src="images/border-photo.svg" alt="">
            <input id="photo" type="file" name="photo" accept="image/*">
        </div>
        <div class="form-group">
            <label>
                Document:
            </label>
            <input type="number" name="document" placeholder="648454 ">
        </div>
        <div class="form-group">
            <label>
                Fullname:
            </label>
            <input type="text" name="fullname" placeholder="Alfonso">
        </div>
        <div class="form-group">
            <label>
                Gender:
            </label>
            <input type="text" name="gender" placeholder="Masculino" value="{{ old('gender')}}">
        </div>
        <div class="form-group">
            <label>
                Email:
            </label>
            <input type="email" name="email" value="{{old('email')}}" placeholder="gmail@gmail.com">
        </div>
        <div class="form-group">
            <label>
                Phone Number:
            </label>
            <input type="text" value="{{old('phone')}}" name="phone" placeholder="312494564">
        </div>
        <div class="form-group">
            <label>
                Birth Date:
            </label>
            <input type="text" value="{{old('birthdate')}}" name="birthdate" placeholder="1978-12-10">
        </div>
        <div class="form-group">
            <label>
                Password:
            </label>
            <img class="ico-eye" src="images/ico-eye.svg" alt="">
            <input type="password" name="password" placeholder="dontmesswithmydog">
        </div>
        <div class="form-group">
            <label>
                Confirm Password:
            </label>
            <img class="ico-eye" src="images/ico-eye.svg" alt="">
            <input type="password" name="password_confirmation" placeholder="dontmesswithmydog">
        </div>
        <div class="form-group">
            <button type="submit">
                <img src="images/content-btn-register.svg" alt="Login">
            </button>
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

            $('.border').click(function (e) {
                $('#photo').click()
            })
            $('#photo').change(function (e) {
                e.preventDefault()
                let reader = new FileReader()
                reader.onload = function(evt) {
                    $('#upload').attr('src', event.target.result)
                }
                reader.readAsDataURL(this.files[0])
            })
        })
</script>
@endsection