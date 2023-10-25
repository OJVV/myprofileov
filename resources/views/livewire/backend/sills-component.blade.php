<div>

  
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">  
        </h2>
    </x-slot>

  

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (Session::has('success'))
            <div class="alert alert-success" role="alert">{{Session::get('success')}}</div>
            @endif

            <div class="bg-white overflow-hidden shadow-xl rounded p-4">
                <h2 class="font-extrabold text-teal-900 hover:text-teal-600 ml-3 text-2xl">My Skills</h2>
                <div class="row">
    

                    <div class="col-md-3 float-left mb-3 ml-2">
                        <input type="search" name="search" id="search" class="form-control pull-left" wire:model="search" wire:poll.750ms>
                        
                    </div>
                    <div class="col-md-3 float-left mb-3 ml-2">
                        <select name="perPage" id="perPage" class="form-control" wire:model="perPage" wire:poll.750ms>
                            
                            <option value="">Select the Page Size</option>
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                        </select>
                    </div>
                    <div class="col-md-3 text-right">
                        <a href="{{route('add_skill')}}" class="btn btn-success">Add New Skill</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered w-full text-center">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Skill</th>
                                <th>Slug</th>
                                <th>Skill Scaled</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($skills as $skill )
                                <tr>
                                   <td >{{$skill->id}}</td>
                                   <td>{{$skill->name}}</td>
                                   <td>{{$skill->slug}}</td>
                                   <td>{{$skill->percentage}}%</td>

                                   <td>
                                    <a href="{{route('edit_skill', ['slug'=>$skill->slug])}}" class="btn btn-primary  text-white">Edit</a>
                                    <a href="#" class="btn btn-danger rounded  text-white" wire:click.prevent="deleteSkill('{{$skill->id}}')">Delete</a>
                                   </td>
                                </tr>                                
                            @empty
                                
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
