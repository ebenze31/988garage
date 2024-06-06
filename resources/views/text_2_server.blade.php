
@php

	$users = Illuminate\Support\Facades\DB::select('SELECT name FROM users');

@endphp

<h1>Users List</h1>
<ul>
    @foreach($users as $user)
        <li>{{ $user->name }}</li>
    @endforeach
</ul>