<?php

use App\Http\Controllers\Controller;
use App\Livewire\Backend\AboutComponent;
use App\Livewire\Backend\MessagesComponent;
use App\Livewire\Backend\ProjectsAddComponent;
use App\Livewire\Backend\ProjectsComponent;
use App\Livewire\Backend\ProjectsEditComponent;
use App\Livewire\Backend\ResumeComponent;
use App\Livewire\Backend\ServicesAddComponent;
use App\Livewire\Backend\ServicesComponent;
use App\Livewire\Backend\ServicesEditComponent;
use Illuminate\Support\Facades\Route;
use App\Livewire\Backend\SillsComponent;
use App\Livewire\Backend\SillAddComponent;
use App\Livewire\Backend\SillEditComponent;
use App\Livewire\WebFrontend\HomeComponent;
use App\Models\About;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


 Route::get('/', function () {
    return redirect()->route("home");
});

Route::get("/", HomeComponent::class)->name("home");

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard',[Controller::class, 'index'])->name('dashboard');
    Route::get('/skills',SillsComponent::class)->name('skills');
    Route::get('/edit/skill/{slug}',SillEditComponent::class)->name('edit_skill');
    Route::get('/add/skill',SillAddComponent::class)->name('add_skill');
    Route::get('/about', AboutComponent::class)->name('about');
    Route::get('/resume', ResumeComponent::class)->name('resume');
    Route::get('/projects', ProjectsComponent::class)->name('projects');
    Route::get('/projects/edit/{id}', ProjectsEditComponent::class)->name('project_edit');
    Route::get('/projects/add', ProjectsAddComponent::class)->name('project_add');
    Route::get('/services', ServicesComponent::class)->name('services');
    Route::get('/add/service', ServicesAddComponent::class)->name('service_add');
    Route::get('/edit/service/{id}', ServicesEditComponent::class)->name('service_edit');
    Route::get('/messages', MessagesComponent::class)->name('messages');


});


