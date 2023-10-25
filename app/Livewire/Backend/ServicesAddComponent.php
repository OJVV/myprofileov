<?php

namespace App\Livewire\Backend;

use App\Models\Service;
use Livewire\Component;

class ServicesAddComponent extends Component
{

    public $title;
    public $description;
    protected $rules = [
        'title' => 'required',
        'description' => 'required'
    ];

    public function addService()
    {
        $this->validate();
        $service = new Service();
        $service->title = $this->title; 
        $service->description = $this->description; 
        $service->save();
        session()->flash('success', 'New Service');
    }
    public function render()
    {
        return view('livewire.backend.services-add-component');
    }
}
