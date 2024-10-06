@extends('layouts.app')
@section('title', 'appmusic -create Songs')
@section('class', 'register')

@section('content')
<header>
    <a href="javascript:;" class="btn-back">
        <img src="images/btn-back.svg" alt="Back">
    </a>
    <img src="{{asset("images/title-registerSong.svg") }}" alt="">
    <svg class="btn-burger" viewBox="0 0 100 100" width="80">
        <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
        <path class="line middle" d="m 70,50 h -40" />
        <path class="line bottom"
            d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
    </svg>
</header>
@include('menuburguer')
<section class="scroll">
    <form action="{{ route('songs.store')}}" method="post" enctype="multipart/form-data">
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
                <p class="letter1">Año de publicación:</p>
            </label>
            <input type="date" name="ano_publicacion" placeholder="2013 ">
        </div>
        <div class="form-group">
            <label>
                <p class="letter1">Nombre de la canción:</p>
            </label>
            <input type="text" name="nombre_cancion" placeholder="Y al final ">
        </div>
        <div class="form-group">
            <label>
                <p class="letter1">Artista:</p>
            </label>
            <select name="song_id">
                <option value="">select...</option>
                @foreach (cats as cat)
                < value="{{$cat->id}}" @if(old('song_id') = $cat->id) selected @endif </option>
                
                @endforeach
                </select>
            <input type="text" name="artista" placeholder="bunbury">
        </div>
        <div class="form-group">
            <label>
                <p class="letter1">Genero:</p>
            </label>
            <input type="text" name="genero" placeholder="rock">
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