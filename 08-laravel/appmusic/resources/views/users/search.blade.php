@forelse ($users as $user)
    <article class="record">
        <figure class="avatar">
            <img src="./images/{{ $user->photo }}" alt="Photo">
        </figure>
        <aside>
            <span class="main-font">{{ $user->fullname }}</span>

            <div class="actions">
                <a href="{{ url('users/' . $user->id . '/edit') }}">
                    <img src="./images/ico-edit.svg" alt="Edit">
                </a>
                <a href="javascript:void(0);" class="delete" data-fullname="{{ $user->fullname }}">
                    <img src="{{ asset('images/ico-delete.svg') }}" alt="Delete" />
                </a>
                <form action="{{ url('users/' . $user->id) }}" method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>

                <a href="/07-layout/users/show.html">
                    <img class="unfollow" src="./images/btn-unfollow.svg" alt="unfollow">
                </a>
            </div>
        </aside>
    </article>
@empty
    No found ✌
@endforelse
