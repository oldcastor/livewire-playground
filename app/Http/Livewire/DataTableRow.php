<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class DataTableRow extends Component
{

    public $user;
    public $expanded = false;

    public function mount($user)
    {
        $this->user = $user;
    }



    public function render()
    {
        return view('livewire.data-table-row');
    }

    public function expand()
    {
        Log::debug('fired');
        $this->expanded = !$this->expanded;
    }
}
