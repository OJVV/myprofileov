<?php

namespace App\Livewire\Backend;

use App\Models\Skill;
use Illuminate\Validation\Rules\Unique;
use Livewire\Component;
use PhpParser\Node\Stmt\TryCatch;

class SillAddComponent extends Component
{
    public $name;
    public $slug;
    public $percentage;
    protected $rules = [
        "name" =>['required','string',' min:3'],
        "slug" =>['required','string',' min:3'],
        "percentage" =>['required','numeric']
    ];

    public function addSkill()
    {
        $this->validate();
        try{
            $skill = new Skill();
            $skill->name = $this->name;
            $skill->slug = $this->slug;
            $skill->percentage = $this->percentage;
            $skill->save();
            session()->flash('success', 'Skill has been created succesfully');
            $this->reset();      
        }catch(\Exception $e){
            $errorMessage = $e->getMessage();
            session()->flash('error', $errorMessage);
         }
    }
    
    public function render()
    {
        return view('livewire.backend.sill-add-component');
    }
}
