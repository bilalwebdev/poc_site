<?php

namespace App\Livewire;

use App\Http\Controllers\BackendApi;
use Livewire\Component;

class Datatable extends Component
{
    public $users;

    public function mount()
    {

        $api = new BackendApi();
        $response = $api->get('datatable');
        $this->users = $response;
    }
    public function render()
    {
        return view('livewire.datatable');
    }
}
