<?php

namespace App\Livewire;

use App\Http\Controllers\BackendApi;
use Livewire\Component;

class FormElement extends Component
{

    public $name;
    public $username;
    // public $api;

    public function submit()
    {
        $api = new BackendApi();
        $res =  $api->post('form', ['name' => $this->name, 'username' => $this->username]);
    }
    public function render()
    {
        return view('livewire.form-element');
    }
}
