
@extends('layouts.app')
@section('title', 'appmusic -create Artist')
@section('class', 'register')

@section('content')
<header>
    <a href="javascript:;" class="btn-back">
    <img src="images/btn-back.svg" alt="Back">
    </a>
    <img src="{{asset("images/title-create-artist.png") }}" alt="">
    <svg class="btn-burger" viewBox="0 0 100 100" width="80">
        <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
        <path class="line middle" d="m 70,50 h -40" />
        <path class="line bottom"
            d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
    </svg>
</header>
@include('menuburguer')
<section class="scroll">
    <form action="{{ route('artists.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @if(count($errors->all()) > 0)
            @foreach($errors->all() as $message)
                <li>{{$message}}</li>
            @endforeach
        @endif
        <div class="form-group">
            <img id="upload" class="mask" src="images/avatar.svg" alt="">
            <input id="photo" type="file" name="photo" accept="image/*">
        </div>
        <div class="form-group">
            <label>
                <p class="letter1">Document:</p>
            </label>
            <input type="number" name="document" placeholder="648454 ">
        </div>
        <div class="form-group">
            <label>
                <p class="letter1">Fullname:</p>
            </label>
            <input type="text" name="fullname" placeholder="Alfonso">
        </div>
        <div class="form-group">
            <label>
                <p class="letter1">Gender:</p>
            </label>
            <input type="text" name="gender" placeholder="Femenino">
        </div>
        <div class="form-group">
            <label>
                <p class="letter1">Email:</p>
            </label>
            <input type="email" name="email" placeholder="dani@gmail.com">
        </div>

        <div class="form-group">
            <label>
                <p class="letter1">Phone Number:</p>
            </label>
            <input type="text" name="phone" placeholder="3102457896">
        </div>
        <div class="form-group">
            <label>
                <p class="letter1">Birthdate:</p>
            </label>
            <input type="text" name="birthdate" placeholder="20/02/2025">
        </div>
       
        <div class="form-group">
            <button type="submit">
            <img src="{{asset("images/btn-register.svg") }}" alt="register">
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
        $togglepass = false
        $('section').on('click', '.ico-eye', function () {

            !$togglepass ? $(this).next().attr('type', 'text')
                : $(this).next().attr('type', 'password')

            !$togglepass ? $(this).attr('src', 'images/ico-eye.svg')
                : $(this).attr('src', 'images/ico-eye-off.svg')



            $togglepass = !$togglepass
        })
        $('#upload').click(function (e) {
            $('#photo').click()
        })
        $('#photo').change(function (e) {
            e.preventDefault()
            let reader = new FileReader()
            reader.onload = function (evt) {
                $('#upload').attr('src', event.target.result)
            }
            reader.readAsDataURL(this.files[0])
        })

    })

</script>
@endsection