
@extends('layouts.app')
@section('title', 'CuboGame - login')
@section('class', 'login')

@section('content')
<header>
    <div></div>
    <img src="images/Login.png" alt="" class="btn-login">
    <svg class="btn-burger" viewBox="0 0 100 100" width="80">
        <path class="line top"
            d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
        <path class="line middle" d="m 70,50 h -40" />
        <path class="line bottom"
            d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
    </svg>

</header>
@include('menuburguer')
<section>

    <form action="dashboard.html" method="get">
        <div class="form-group">
            <label>
                <img src="images/ico-email.png" alt="email">
                <p class="letter1">Email</p>
            </label>

            <input type="email" name="email" placeholder="danyvalencia@.com">
        </div>
        <div class="form-group">
            <label>
                <img src="images/ico-password.png" alt="paswords">
                <p class="letter1">password</p>
            </label>
            <img class="ico-eye" src="images/hide-password.png" alt="Eye">

            <input type="password" name="password" placeholder="danyvalencia">

        </div>
        <div class="form-group">
            <button type="submit" value="Login">
                <img src="images/btn-login.svg" alt="login">
            </button>
           <img src="images/Forgot-your-password.svg" class="forgot-your-password">
           

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