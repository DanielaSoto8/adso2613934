@forelse ($users as $user)
{{ $user->fullname}}
@empty
 No found ✌
 @endforelse

