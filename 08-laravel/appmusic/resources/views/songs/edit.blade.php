@extends('layouts.app')
@section('title', 'appmusic - Edit Song')
@section('class', 'edit register')

@section('content')
<header>
    <a href="{{ url('songs') }}" class="btn-back">
        <img src="{{ asset('images/btn-back.svg') }}" alt="Back">
    </a>
    <img src="{{ asset('images/title-editSong.svg') }}" alt="Edit Song">
    <svg class="btn-burger" viewBox="0 0 100 100" width="80">
        <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
        <path class="line middle" d="m 70,50 h -40" />
        <path class="line bottom" d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
    </svg>
</header>

@include('menuburguer')

<section class="scroll">
    <form action="{{ url('songs/' . $song->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        @if($errors->any())
            <div class="form-errors">
                <ul>
                    @foreach($errors->all() as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-group">
            <img id="upload" class="mask" src="{{ $song->photo ? asset('images/' . $song->photo) : asset('images/default-photo.png') }}" alt="User Photo">
            <input id="photo" type="file" name="photo" accept="image/*" style="display: none;">
            <input type="hidden" name="originphoto" value="{{ $song->photo }}">
            <img class="profile-photo"  src="{{ asset('images/btn_changephoto.svg') }}" alt="Back">

        </div>

        <div class="form-group">
        <p class="letter1">Año de publicacion :</p>
            <input type="date" id="document" name="ano_publicacion" value="{{ old('ano_publicacion', $song->ano_publicacion) }}" readonly>
        </div>

        <div class="form-group">
        <p class="letter1">Nombre de la cancion:</p>
            <input type="text" id="nombre_cancion" name="nombre_cancion" value="{{ old('nombre_cancion', $song->nombre_cancion) }}">
        </div>

        <div class="form-group">
        <p class="letter1">Artista:</p>
            <input type="text" id="gender" name="artista" value="{{ old('artista', $song->artista) }}">
        </div>

        <div class="form-group">
        <p class="letter1">Genero:</p>
            <input type="text" id="email" name="genero" value="{{ old('genero', $song->genero) }}">
        </div>

        <div class="form-group">
            <button type="submit">
                <img src="{{ asset('images/btn-updateSong.png') }}" alt="">
            </button>
        </div>
    </form>
</section>

@section('js')
<script>
    $(document).ready(function () {
        // Burger menu toggle
        $('header').on('click', '.btn-burger', function () {
            $(this).toggleClass('active');
            $('.nav').toggleClass('active');
        });

        // Password show/hide toggle
        let togglePass = false;
        $('section').on('click', '.ico-eye', function () {
            togglePass = !togglePass;
            $('#password').attr('type', togglePass ? 'text' : 'password');
            $(this).attr('src', togglePass ? '{{ asset("images/ico-eye.svg") }}' : '{{ asset("images/ico-eye-off.svg") }}');
        });

        // Trigger file input when clicking on the image
        $('.btn-upload').click(function () {
            $('#photo').click();
        });

        // Preview selected image
        $('#photo').change(function (e) {
            let reader = new FileReader();
            reader.onload = function (event) {
                $('#upload').attr('src', event.target.result);
            };
            reader.readAsDataURL(this.files[0]);
        });
    });
</script>
@endsection
@endsection
