<?php

namespace App\Livewire\WebFrontend;

use App\Models\About;
use App\Models\Skill;
use App\Models\Resume;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Service;
use Livewire\Component;


class HomeComponent extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;
    
    protected $rules = [
        'name' => 'required|string',
        'email'=> 'required|email',
        'phone'=> 'required',
        'message' => 'required'
    ];

    public function addMessage()
    {
        $this->validate();
        $contact = new Contact();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->phone = $this->phone;
        $contact->message = $this->message;
        $contact->save();
        session()->flash('success', 'Your Message Received. Soon I will contact you. Thanks');
        $this->reset();
        redirect('/');
    }

    public function render()
    {
        $skills=Skill::limit(5)->get();
        $skills2=Skill::orderBy("id",'desc')->limit(5)->get(); 
        $about=About::first();
        $resume = Resume::find(1);
        $projects = Project::orderBy('id', 'desc')->get(); 
        $services = Service::get();
        return view('livewire.web-frontend.home-component', ['skills'=>$skills, 'skills2'=>$skills2, 'about'=>$about, 'resume' => $resume, 'projects' => $projects, 'services' =>$services])->layout("layouts.base");
    }
}
