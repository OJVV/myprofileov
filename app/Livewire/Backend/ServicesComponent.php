<?php

namespace App\Livewire\Backend;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class ServicesComponent extends Component
{
    use WithPagination;
    public $search = '';
    public $perPage = 5;

    public function deleteService($id)
    {
        $skill = Service::find($id);
        $skill->delete();
        session()->flash('success', 'Service has been deleted');
        redirect('/services');
    
        
    }
    
    public function render()
    {
        $services = Service::search($this->search)->paginate($this->perPage);
        return view('livewire.backend.services-component', ['services' => $services]);
    }
}
