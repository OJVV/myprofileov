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
                    <h2 class="font-extrabold text-teal-900 hover:text-teal-600 ml-3 text-2xl">My Projects</h2>
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
                            <a href="{{route('project_add')}}" class="btn btn-success">Add New Project</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered w-full text-center">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Project</th>
                                    <th>Image</th>
                                    <th>Link</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projects as $project)
                                <tr>
                                    <td>{{$project->id}}</td>
                                    <td>{{$project->title}}</td>
                                    <td><img src="{{asset('assets/img/project')}}/{{$project->project_image}}" width="120" class="img-thumbnail" alt="img"></td>
                                    <td>{{$project->link}}</td>
                            
                                    <td>
                                        <a href="{{route('project_edit', ['id'=>$project->id])}}" class="btn btn-primary  text-white">Edit</a>
                                        <a href="#" class="btn btn-danger rounded  text-white" wire:click.prevent="deleteProject('{{$project->id}}')">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    