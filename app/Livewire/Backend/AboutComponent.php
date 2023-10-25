<?php

namespace App\Livewire\Backend;

use Carbon\Carbon;
use App\Models\About;
use Livewire\Component;

use Livewire\WithFileUploads;
use PhpParser\Node\Stmt\TryCatch;

class AboutComponent extends Component
{
    use WithFileUploads;

    public $title;
    public $profile_image;
    public $origin_country;
    public $country_of_residence;
    public $website;
    public $email;
    public $phone;
    public $degree;
    public $age;
    public $new_image;

    protected $rules = [
        'title' => ['required', 'string', 'min:6'],
        'origin_country' => ['required', 'string', 'min:3'],
        'country_of_residence' => ['required', 'string', 'min:3'],
        'website' => ['required', 'string', 'min:3'],
        'email' => ['required', 'string', 'min:3'],
        'phone' => ['required', 'string', 'min:8'],
        'degree' => ['required', 'string', 'min:3'],
        'age' => ['required', 'numeric'],

    ];


    public function mount()
    {
        $about = About::firstOrCreate(['id' => 1]);
        if($about){
            $this->title = $about->title;
            $this->profile_image = $about->profile_image;
            $this->origin_country = $about->origin_country;
            $this->country_of_residence = $about->country_of_residence;
            $this->website = $about->website;
            $this->email = $about->email;
            $this->phone = $about->phone;
            $this->degree = $about->degree;
            $this->age = $about->age;
           
        }
    }

    public function addProfile()
    {
        $this->validate();
        try{
            
            $about = About::firstOrCreate(['id' => 1]);
            if($about){
                $about->title = $this->title;
                $about->profile_image = $this->profile_image;
                $about->origin_country = $this->origin_country;
                $about->country_of_residence =  $this->country_of_residence;
                $about->website =  $this->website;
                $about->email = $this->email;
                $about->phone = $this->phone;
                $about->degree = $this->degree;
                $about->age = $this->age;

                if($this->new_image){
                    $image = Carbon::now()->timestamp . '.' . $this->new_image->extension();
                    $this->new_image->storeAs('assets/img/about', $image);
                    $about->profile_image = $image;
                }
                $about->save();
                session()->flash('success', 'Profile Update');
               
            }else {
                $about = new About();
                $about->title = $this->title;
                $about->profile_image = $this->profile_image;
                $about->origin_country = $this->origin_country;
                $about->country_of_residence =  $this->country_of_residence;
                $about->website =  $this->website;
                $about->email = $this->email;
                $about->phone = $this->phone;
                $about->degree = $this->degree;
                $about->age = $this->age;

                if($this->new_image){
                    $image = Carbon::now()->timestamp . '.' . $this->new_image->extension();
                    $this->new_image->storeAs('assets/img/about', $image);
                    $about->profile_image = $image;
                }
                
                $about->save();
                session()->flash('success', 'Profile Added'); 
                 
            }
          
        } catch(\Exception $e){
            $errMessage = $e->getMessage();
            session()->flash('error', $errMessage);
        }
    }

  
    public function render()
    {
        return view('livewire.backend.about-component');
    }
}
