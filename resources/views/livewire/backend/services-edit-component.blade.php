
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
                    <h2 class="font-extrabold text-teal-900 hover:text-teal-600">Edit Service</h2>
                    <form wire:submit.prevent ="editService">
                     <div class="form-group">
                        <label for="title" class="label-control">Service Name<b class="text-danger">*</b></label>
                       <select name="title" id="title" class="form-control" wire:model='title'>
                        <option value="" >Select Service</option>
                        <option value="Web Application Development" >Web Application Development</option>
                        <option value="Web Development" >Web Development</option>
                        <option value="Web Api Development" >Web Api Development</option>
                        <option value="Web Performance" >Web Performance</option>
                        <option value="Web Security" >Web Security</option>
                        <option value="Web Maintenance and Support" >Web Maintenance and Support</option>
                       </select>
                        @error('title')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                        <div class="form-group">
                            <label for="description" class="label-control">Description<b class="text-danger ">*</b></label>
                            <input type="text" name="description" id="description" class="form-control w-full mx-2" placeholder="" wire:model='description'>
                            @error('description')
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
    

