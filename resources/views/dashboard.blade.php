<div>
    <x-app-layout>
        
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>
    
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl rounded p-4">
                    <h2 class="font-extrabold text-teal-900 hover:text-teal-600 ml-3 text-2xl">My Skills</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered w-full text-center">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Skill</th>
                                    <th>Skill Scaled</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($skills as $skill )
                                    <tr>
                                       <td>{{$skill->id}}</td>
                                       <td>{{$skill->name}}</td>
                                       <td>{{$skill->percentage}}%</td>
    
                                       <td>
                                        <a href="" class="btn btn-primary  text-white">Edit</a>
                                        <a href="#" class="btn btn-danger rounded  text-white">Delete</a>
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
    </x-app-layout>
</div>
    