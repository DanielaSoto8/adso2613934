@extends('layouts.app')
@section('title', 'appmusic - songs Module')
@section('class', 'songs')

@section('content')
<header>



  <a class="btn-back" href="{{ url('dashboard') }}">
    <img src="images/btn-back.svg" alt="Back">
  </a>
  <img src="images/title-song.svg" alt="">
  <svg class="btn-burger" viewBox="0 0 100 100" width="80">
    <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
    <path class="line middle" d="m 70,50 h -40" />
    <path class="line bottom" d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
  </svg>

</header>
@include('menuburguer')
<section>
  <div class="area">
    <div class="buttons-content">
      <a href="add-artist.html">
        <img src="./images/btn-add.svg" alt="Add">
      </a>
      <a href="add-song.html">
        <img src="./images/btn-search.svg" alt="Search">
      </a>
    </div>
 
    <article class="record song">
      <figure class="avatar">
      <img src="./images/image 2.png" alt="Photo">
      </figure>
      <aside class="song">
      <span class="main-font">Al final</span>
      <span class="second-font">Enrique Bunbury</span>
      <div class="actions song">
        <a href="edit.html">
        <img src="./images/ico-edit.svg" alt="Edit">
        </a>
        <a href="javascript:;">
        <img src="./images/ico-delete.svg" alt="Delete">
        </a>
        <a href="/07-layout/users/show.html">
        <img class="play" src="./images/btn-play.svg" alt="play">
        </a>
      </div>
      </aside>
    </article>
    <article class="record song">
      <figure class="avatar">
      <img src="./images/image 2.png" alt="Photo">
      </figure>
      <aside class="song">
      <span class="main-font">Al final</span>
      <span class="second-font">Enrique Bunbury</span>
      <div class="actions song">
        <a href="edit.html">
        <img src="./images/ico-edit.svg" alt="Edit">
        </a>
        <a href="javascript:;">
        <img src="./images/ico-delete.svg" alt="Delete">
        </a>
        <a href="/07-layout/users/show.html">
        <img class="play" src="./images/btn-play.svg" alt="play">
        </a>
      </div>
      </aside>
    </article>
    <article class="record song">
      <figure class="avatar">
      <img src="./images/image 2.png" alt="Photo">
      </figure>
      <aside class="song">
      <span class="main-font">Al final</span>
      <span class="second-font">Enrique Bunbury</span>
      <div class="actions song">
        <a href="edit.html">
        <img src="./images/ico-edit.svg" alt="Edit">
        </a>
        <a href="javascript:;">
        <img src="./images/ico-delete.svg" alt="Delete">
        </a>
        <a href="/07-layout/users/show.html">
        <img class="play" src="./images/btn-play.svg" alt="play">
        </a>
      </div>
      </aside>
    </article>
    <article class="record song">
      <figure class="avatar">
      <img src="./images/image 2.png" alt="Photo">
      </figure>
      <aside class="song">
      <span class="main-font">Al final</span>
      <span class="second-font">Enrique Bunbury</span>
      <div class="actions song">
        <a href="edit.html">
        <img src="./images/ico-edit.svg" alt="Edit">
        </a>
        <a href="javascript:;">
        <img src="./images/ico-delete.svg" alt="Delete">
        </a>
        <a href="/07-layout/users/show.html">
        <img class="play" src="./images/btn-play.svg" alt="play">
        </a>
      </div>
      </aside>
    </article>
  </div>
</section>
<script src="js/jquery-3.7.1.min.js"></script>

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

  })

</script>
@endsection