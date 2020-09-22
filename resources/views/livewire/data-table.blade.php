<div id="data-table-parent">

    <div class="hero is-small is-info is-bold">
        <div class="hero-body">
            <div class="field">
                <div class="label">Filter</div>
                <div class="control">
                    <input class="input" type="search" placeholder="Name or email"
                        wire:model.debounce.400ms="searchText">
                </div>
            </div>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <td></td>
                <td>Name</td>
                <td>email</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($filteredList as $user)
            @livewire('data-table-row', ['user'=>$user], key($user->id))
            {{-- <livewire:data-table-row :user="$user" :key="$user->id" /> --}}
            @endforeach
        </tbody>
    </table>



</div>