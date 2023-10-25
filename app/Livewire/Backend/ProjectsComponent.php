<?php

namespace App\Livewire\Backend;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;

class ProjectsComponent extends Component
{
    use WithPagination;
    public $search = '';
    public $perPage = 5;

    public function deleteProject($id)
    {
        $project = Project::find($id);
        $project->delete();
        session()->flash('success', 'Project has been removed');
        redirect('/projects');
    }

    public function render()
{
   
    $projects = Project::search($this->search)->paginate($this->perPage);
   
    return view('livewire.backend.projects-component', compact('projects'));
   
}

public function onPerPageChange($perPage)
{
    $this->perPage = $perPage;
    $this->refresh();
}
}
