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
                    <h2 class="font-extrabold text-teal-900 hover:text-teal-600 ml-3 text-2xl">Add / Update Resume</h2>
                    <form wire:submit.prevent ="addResume">
                        @csrf
                     <div class="form-group">
                        <label for="summary" class="label-control">Summary<b class="text-danger">*</b></label>
                        <textarea name="summary" id="summary" cols="30" rows="10" wire:model='summary' class=" w-full"></textarea>
                        @error('summary')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                        <div class="form-group">
                            <label for="education" class="label-control">Education<b class="text-danger ">*</b></label>
                            <textarea class=" w-full" name="education" id="education" cols="30" rows="10" wire:model='education'></textarea>
                            @error('education')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="experience" class="label-control">Experience<b class="text-danger">*</b></label>
                            <textarea  class=" w-full"name="experience" id="experience" cols="30" rows="10" wire:model='experience'></textarea>
                            @error('experience')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
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
    

