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
                    <h2 class="font-extrabold text-teal-900 hover:text-teal-600 ml-3 text-2xl">Add / Update Profile</h2>
                    <form wire:submit.prevent ="addProfile" enctype="multipart/form-data" method="POST">
                        @csrf
                     <div class="form-group">
                        <label for="title" class="label-control">Profile Tittle<b class="text-danger">*</b></label>
                        <input type="text" name="title" id="title" class="form-control w-full mx-2" wire:model='title'>
                        @error('title')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                        <div class="form-group">
                            <label for="origin_country" class="label-control">Origin Country<b class="text-danger ">*</b></label>
                            <input type="text" name="origin_country" id="origin_country" class="form-control w-full mx-2" wire:model='origin_country'>
                            @error('origin_country')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="country_of_residence" class="label-control">Country of Residence<b class="text-danger">*</b></label>
                            <input type="text" name="country_of_residence" id="country_of_residence" class="form-control w-full mx-2" wire:model='country_of_residence'>
                            @error('country_of_residence')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="website" class="label-control">Webiste<b class="text-danger">*</b></label>
                            <input type="text" name="website" id="website" class="form-control w-full mx-2" wire:model='website'>
                            @error('website')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email" class="label-control">Email<b class="text-danger">*</b></label>
                            <input type="email" name="email" id="email" class="form-control w-full mx-2" wire:model='email'>
                            @error('email')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone" class="label-control">Phone<b class="text-danger">*</b></label>
                            <input type="number" name="phone" id="phone" class="form-control w-full mx-2" wire:model='phone'>
                            @error('phone')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="new_image" class="label-control">Image<b class="text-danger">*</b></label>
                            <input type="file" name="new_image" id="new_image" class="form-control w-full mx-2" wire:model='new_image'>
                           @if($profile_image)
                            <img src="{{ asset('images/about')}}/{{$profile_image}}" width="120" alt="" class="">
                            @elseif ($new_image)
                                <img src="{{ $new_image->temporaryurl()}}" width="120" alt="" class="">
                             @endif   
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary mt-3" type="submit" >
                                Save
                            </button>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
   
</div>
    

