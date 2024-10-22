@forelse ($artists as $artist)
    <article class="record">
        <figure class="avatar">
            <img src="./images/{{ $artist->photo }}" alt="Photo">
        </figure>
        <aside>
            <span class="main-font">{{ $artist->fullname }}</span>

            <div class="actions">
                <a href="{{ url('artists/' . $artist->id . '/edit') }}">
                    <img src="../images/ico-edit.svg" alt="Edit" />
                </a>
                <a href="javascript:void(0);" class="delete" data-fullname="{{ $artist->fullname }}">
                    <img src="{{ asset('images/ico-delete.svg') }}" alt="Delete" />
                </a>

                <form action="{{ url('artists/' . $artist->id) }}" method="post" class="delete-form">
                    @csrf
                    @method('delete')
                </form>


                <a href="{{ url('artists/' . $artist->id) }}">
                    <img src="../images/btn-unfollow.svg" alt="Show" />
                </a>
            </div>
        </aside>
    </article>
@empty
    No found ✌
@endforelse
