<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;

class DataTable extends Component
{
    public $list;
    public $filteredList;
    public $searchText;

    protected function getData()
    {
        $this->list = User::query()->get();
        $this->updatedSearchText($this->searchText);
    }

    public function updatedSearchText($value)
    {
        if (Str::length($value) < 3) {
            $this->filteredList = $this->list;
            return;
        }

        $value = Str::lower($value);
        $this->filteredList = $this->list->filter(function (User $user) use ($value) {
            return Str::contains(Str::lower($user->email), $value) || Str::contains(Str::lower($user->name), $value);
        });
    }

    public function mount()
    {
        $this->searchText = '';
        $this->getData();
    }

    public function render()
    {
        return view('livewire.data-table');
    }
}
