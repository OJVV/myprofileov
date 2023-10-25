<?php

namespace App\Livewire\Backend;

use App\Models\Resume;
use Livewire\Component;

class ResumeComponent extends Component
{
    public $summary;
    public $education;
    public $experience;

    protected $rules = [
        'summary' => ['required'],
       ' education' =>['required'],
       ' experience' =>['required'],
    ];

    public function mount(){
        $about = Resume::firstOrCreate(['id' => 1]);
        if($about){
            $this->summary = $about->summary;
            $this->education = $about->education;
            $this->experience = $about->experience;
        }
    }

    public function addResume()
    {
        $this->validate([
            'summary' => 'required',
            'education' => 'required',
            'experience' => 'required',
        ]);

        try{
    $about = Resume::firstOrCreate(['id' => 1]);
    if($about){
        $about->summary = $this->summary;
        $about->education = $this->education;
        $about->experience = $this->experience;
        $about->save();
        session()->flash('success' ,' Resume Update');
    } else {
        $about = new Resume();
        $about->summary = $this->summary;
        $about->education = $this->education;
        $about->experience = $this->experience;
        $about->save();
        session()->flash('success' ,' Resume Added');

    }

} catch(\Exception $e){
    $errMessage = $e->getMessage();
    session()->flash('error', $errMessage);
}

    }

    public function render()
    {
        return view('livewire.backend.resume-component');
    }
}
