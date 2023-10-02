<?php

namespace App\Livewire;

use App\Http\Controllers\BackendApi;
use Livewire\Component;

class ChartsApex extends Component
{

    public $series1;
    public $series2;
    public $categories;

    public function mount()
    {
        $api = new BackendApi();
        $response = $api->get('apexchart');

        $this->series1 = $response['series'][0];
        $this->series2 = $response['series'][1];
        $this->categories = $response['xaxis']['categories'];
    }
    public function render()
    {
        return view('livewire.charts-apex');
    }
}
