@extends('layouts.app')
@section('title', 'appmusic - songs Module')
@section('class', 'songs')

@section('content')
<header>
    <a href="./dashboard.html" class="btn-back">
        <img src="images/btn-back.svg" alt="Back">
    </a>
    <img src="images/title-songs.svg" alt="">
    <svg class="btn-burger" viewBox="0 0 100 100" width="80">
        <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
        <path class="line middle" d="m 70,50 h -40" />
        <path class="line bottom"
            d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
    </svg>
</header>
@include('menuburguer')
<section>
    <div class="area">

        <div class="container">
            <input type="text" placeholder="Search..." name="qsearch" id="qsearch" class="qsearch">
            <div class="files-download">



                <a href="{{ url('songs/pdf') }}">
                    <img class="download" src="{{ asset('images/btn_pdf.png') }}" alt="PDF">
                </a>

                <a href="{{ url('export/songs/excel') }}">
                    <img class="download" src="{{ asset('images/btn_excel.png') }}" alt="Excel">
                </a>

                <a class="download" href="{{ url('songs/create') }}">
                    <img src={{ asset('images/btn-add.jpg') }} alt="" />
                </a>

            </div>
        </div>

        <div class="content-list">
            @foreach ($songs as $song)
                <article class="record">
                    <figure class="avatar">
                        <img src="./images/{{ $song->photo }}" alt="Photo">
                    </figure>
                    <aside>
                        <span class="main-font">{{ $song->nombre_cancion }}</span>

                        <div class="actions">
                            <a href="{{ url('songs/' . $song->id . '/edit') }}">
                                <img src="../images/ico-edit.svg" alt="Edit" />
                            </a>
                            <a href="javascript:void(0);" class="delete" data-fullname="{{ $song->fullname }}">
                                <img src="{{ asset('images/ico-delete.svg') }}" alt="Delete" />
                            </a>

                            <form action="{{ url('songs/' . $song->id) }}" method="post" class="delete-form">
                                @csrf
                                @method('delete')
                            </form>


                            <a href="{{ url('songs/' . $song->id) }}">
                                <img src="../images/btn-unfollow.svg" alt="Show" />
                            </a>


                        </div>
                    </aside>
                </article>
            @endforeach
        </div>
    </div>
</section>
<div class="paginate">
    {{ $songs->links('layouts.paginator') }}
</div>
@endsection

@section('js')
<script src="js/jquery-3.7.1.min.js"></script>

<script>
    $(document).ready(function () {
        $('header').on('click', '.btn-burger', function () {
            $(this).toggleClass('active');
            $('.nav').toggleClass('active');
        });
    });
        

        // Script para manejar la eliminación de usuarios
        $('section').on('click', '.delete', function (e) {
            e.preventDefault();
            if (confirm(`Are you sure you want to delete ${$(this).data('fullname')}?`)) {
                $(this).siblings('form').submit();
            }
        });
        $('.qsearch').on('keyup', function (e) {
            e.preventDefault();
            var query = $(this).val();
            var token = $('meta[name="csrf-token"]').attr('content');
            var model = 'songs';
            console.log(query, token);

            $.post(model + '/search', {
                q: query,
                _token: token
            },
                function (data) {
                    $('.content-list').html(data);
                }
            ).fail(function (xhr, status, error) {
                console.error('Error:', error);
            });
        });
</script>
@endsection