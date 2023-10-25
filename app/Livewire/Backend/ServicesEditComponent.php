<?php

namespace App\Livewire\Backend;

use App\Models\Service;
use Livewire\Component;

class ServicesEditComponent extends Component
{
    public $title;
    public $description;
    public $service;
    protected $rules = [
        'title' => 'required',
        'description' => 'required'
    ];

    public function mount($id)
    {
        $this->service = $id;
        $service = Service::find($id);
        $this->title = $service->title;
        $this->description = $service->description;
    }

    public function editService()
    {
        $this->validate();
        $service = Service::find($this->service);
        $service->title = $this->title; 
        $service->description = $this->description; 
        $service->save();
        session()->flash('success', 'Service has been update');
    }
    public function render()
    {
        return view('livewire.backend.services-edit-component');
    }
}
