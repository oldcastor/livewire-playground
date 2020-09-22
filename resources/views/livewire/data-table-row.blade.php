<div>
    {{-- <tr @if ($expanded) class="has-background-info-dark" @endif> --}}
    <tr>
        <td><button class="button" wire:click="expand">[<-->]</button></td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
    </tr>
</div>