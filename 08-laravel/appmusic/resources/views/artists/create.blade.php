@extends('layouts.app')
@section('title', 'appmusic -create Artist')
@section('class', 'register')

@section('content')
<header>
    <a href="javascript:;" class="btn-back">
    <img src="images/btn-back.svg" alt="Back">
    </a>
    <img src="{{asset("images/create-user.svg") }}" alt="">
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
                <div class="column">
                    <label class="main-font">Nombre</label>
                    <input type="text" name="name" >
                </div>
                
                <div class="column">
                    <label class="main-font">Email</label>
                    <input type="text" name="name" >
                </div>
                
                <div class="column">
                    <label class="main-font">Phone Number</label>
                    <input type="text" name="name" >
                </div>
                
                <div class="column">
                    <label class="main-font">Birth date</label>
                    <input type="text" name="name" >
                </div>
                <button type="submit" value="Agregar">
                    <img  src="images/btn-save.svg" >
                </button>
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