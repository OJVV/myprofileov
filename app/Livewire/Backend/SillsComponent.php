<?php

namespace App\Livewire\Backend;

use App\Models\Skill;
use Livewire\Component;
use Livewire\WithPagination;

class SillsComponent extends Component
{
    use WithPagination;
    public $search = '';
    public $perPage = 5;

    public function deleteSkill($id)
{
    $skill = Skill::findorFail($id);
    $skill->delete();
    session()->flash('success', 'Skill has been deleted');
    redirect('/skills');

    
}

    public function render()
    {
        $skills = Skill::search($this->search)->paginate($this->perPage);

        return view('livewire.backend.sills-component', compact('skills'));
    }

    public function onPerPageChange($perPage)
    {
        $this->perPage = $perPage;
        $this->refresh();
    }
}
