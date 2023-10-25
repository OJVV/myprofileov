<?php

namespace App\Livewire\Backend;

use Carbon\Carbon;
use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProjectsAddComponent extends Component
{
    use WithFileUploads;

    public $project_image;

    public $title;

    public $link;

    protected $rules = [
        'title' => 'required|string',
        'link' => 'required|string',
        'project_image' => 'required|mimes:jpg,jpeg,png'
    ];

    public function addProject()
    {
        $this->validate();

        $project = new Project;
        $project->title = $this->title;
        $project->link = $this->link;

        if ($this->project_image) {
            $image = Carbon::now()->timestamp . '.' . $this->project_image->extension();
            $this->project_image->storeAs('assets/img/project', $image);
            $project->project_image = $image;
        }

        $project->save();

        session()->flash('success', 'Project has been Added');
    }
    public function render()
    {
        return view('livewire.backend.projects-add-component');
    }
}
