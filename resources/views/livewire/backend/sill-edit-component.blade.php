
<div>
   
         
           <x-slot name="header">
               <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                 
               </h2>
           </x-slot>
       
         
       
           <div class="py-12">
               <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                  @if (Session::has('success'))
                  <div class="alert alert-success" role="alert">{{Session::get('success')}}</div>
                     @elseif(Session::has('error'))
                     <div class="alert alert-danger" role="alert">{{Session::get('error')}}</div>
                  @endif
                   <div class="bg-white overflow-hidden shadow-xl rounded p-4">
                       <h2 class="font-extrabold text-teal-900 hover:text-teal-600">Edit {{$name}}</h2>
                       <form wire:submit.prevent ="updateSkill">
                        <div class="form-group">
                           <label for="name" class="label-control">Skill Name<b class="text-danger">*</b></label>
                           <input type="text" name="name" id="name" class="form-control w-full mx-2" wire:model='name'>
                           @error('name')
                               <span class="text-danger">{{$message}}</span>
                           @enderror
                       </div>
                           <div class="form-group">
                               <label for="slug" class="label-control">Skill Slug<b class="text-danger ">*</b></label>
                               <input type="text" name="slug" id="slug" class="form-control w-full mx-2" placeholder="in slug" wire:model='slug'>
                               @error('slug')
                                   <span class="text-danger">{{$message}}</span>
                               @enderror
                           </div>
                           <div class="form-group">
                               <label for="percentage" class="label-control">Percentage<b class="text-danger">*</b></label>
                               <input type="number" name="percentage" id="percentage" class="form-control w-full mx-2" wire:model='percentage'>
                               @error('percentage')
                                   <span class="text-danger">{{$message}}</span>
                               @enderror
                           </div>
                           <div class="form-group">
                               <button class="btn btn-primary" type="submit">
                                   Save
                               </button>
                           </div>
                          
                       </form>
                   </div>
               </div>
           </div>
  
       </div>
       

