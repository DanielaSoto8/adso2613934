@forelse ($songs as $song)
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
@empty
    No found ✌
@endforelse
