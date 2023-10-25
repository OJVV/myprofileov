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
                <h2 class="font-extrabold text-teal-900 hover:text-teal-600 ml-3 text-2xl">Messages</h2>
                <div class="row">
    

                    <div class="col-md-6 float-left mb-3 ml-2">
                        <input type="search" name="search" id="search" class="form-control pull-left" wire:model="search" wire:poll.750ms>
                        
                    </div>
                    <div class="col-md-6 float-left mb-3 ml-2">
                        <select name="perPage" id="perPage" class="form-control" wire:model="perPage" wire:poll.750ms>
                            
                            <option value="">Select the Page Size</option>
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                        </select>
                    </div>
                 
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered w-full text-center">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Client</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Message</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($contacts as $contact )
                                <tr>
                                   <td >{{$contact->id}}</td>
                                   <td>{{$contact->name}}</td>
                                   <td>{{$contact->email}}</td>
                                   <td>{{$contact->phone}}</td>
                                   <td>{{$contact->message}}</td>
                                   <td>{{\Carbon\Carbon::parse($contact->created_at)->isoFormat('MMM Do YYY')}}</td>
                                   <td>
                                    
                                    <a href="#" class="btn btn-danger rounded  text-white" wire:click.prevent="deleteContact('{{$contact->id}}')">Delete</a>
                                   </td>
                                </tr>                                
                            @empty
                                
                            @endforelse
                        </tbody>
                    </table>
                    {{$contacts->links()}}
                </div>
            </div>
        </div>
    </div>

</div>
