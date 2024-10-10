<div>
    <h1>My component</h1>
    <input wire:model.live="search" />
    <br>
    <ul>
        @foreach($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
</div>
