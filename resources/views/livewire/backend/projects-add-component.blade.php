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
                    <h2 class="font-extrabold text-teal-900 hover:text-teal-600 ml-3 text-2xl">Add New Project</h2>
                    <form wire:submit.prevent ="addProject" enctype="multipart/form-data" method="POST">
                        @csrf
                     <div class="form-group">
                        <label for="title" class="label-control">Project Title<b class="text-danger">*</b></label>
                       <select name="title" id="title" class="form-control" wire:model = "title">
                        <option value="">Select the title</option>
                        <option value="webs">Webs</option>
                        <option value="apps">App Webs</option>
                       </select>
                        @error('title')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                        <div class="form-group">
                            <label for="link" class="label-control">Project Link<b class="text-danger ">*</b></label>
                            <input type="text" name="link" id="link" class="form-control w-full mx-2" wire:model='link'>
                            @error('link')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                       
                        <div class="form-group">
                            <label for="project_image" class="label-control">Project Image<b class="text-danger">*</b></label>
                            <input type="file" name="project_image" id="project_image" class="form-control w-full mx-2" wire:model='project_image'>
                           @if($project_image)
                                <img src="{{ $project_image->temporaryurl()}}" width="120" alt="" class="">
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
    

