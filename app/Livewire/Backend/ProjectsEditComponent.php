<?php

namespace App\Livewire\Backend;

use App\Models\Project;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProjectsEditComponent extends Component
{
    use WithFileUploads;

    public $project_image;
    public $new_image;
    public $title;
    public $link;
    public $project;

    public function mount($id)
    {
        $this->project = $id;
        $project = Project::find($id);
        $this->title = $project->title;
        $this->link = $project->link;
        $this->project_image = $project->project_image;

    }

    public function editProject()
    {
        $project = Project::find($this->project);
        $project->title = $this->title ;
        $project->link =  $this->link;
        if($this->new_image){
            $image = Carbon::now()->timestamp. '.' . $this->new_image->Storage::extension();
            $this->new_image->storeAs('assets/img/project', $image);
            $project->project_image = $image;
        }
        $project->save();
        session()->flash('success', 'Project has been update');

    }

    public function render()
    {
        return view('livewire.backend.projects-edit-component');
    }
}
