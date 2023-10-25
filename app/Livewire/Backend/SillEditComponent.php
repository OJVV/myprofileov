<?php

namespace App\Livewire\Backend;

use App\Models\Skill;
use Livewire\Component;

class SillEditComponent extends Component
{
    public $name;
    public $slug;
    public $percentage;
    public $s_slug;
    protected $rules = [
        "name" =>['required','string',' min:3'],
        "slug" =>['required','string',' min:3'],
        "percentage" =>['required','numeric']
    ];
    public function mount($slug){
        $this->s_slug = $slug;
        $skill = Skill::where('slug', $slug)->first();
        $this->name = $skill->name;
        $this->slug = $skill->slug ;
        $this->percentage =  $skill->percentage;
    }

    public function updateSkill()
    {
        $this->validate();
        try{
            $skill = Skill::where('slug', $this->s_slug)->first();
            $skill->name = $this->name;
            $skill->slug = $this->slug;
            $skill->percentage = $this->percentage;
            $skill->save();
            session()->flash('success', 'Skill has been updated succesfully')  ;      
        }catch(\Exception $e){
            $errorMessage = $e->getMessage();
            session()->flash('error', $errorMessage);
         }
    }
    public function render()
    {
        return view('livewire.backend.sill-edit-component',);
    }
}
