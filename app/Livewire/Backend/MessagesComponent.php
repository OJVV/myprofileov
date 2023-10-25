<?php

namespace App\Livewire\Backend;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithFileUploads;

class MessagesComponent extends Component
{
    use WithFileUploads;

    public $search = '';
    public $perPage = 5;

    public function deleteContact($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        session()->flash('success','Message is deleted');
        redirect('/messages');
    }
    public function render()
    {
        $contacts = Contact::search($this->search)->paginate($this->perPage);
        return view('livewire.backend.messages-component', compact('contacts'));
    }
}
