<x-layout>
    <header class="text-center">
                        <h2 class="text-2xl font-bold uppercase mb-1">
                            Edit Gig
                        </h2>
                        <p class="mb-4">Edit: {{$weekend->fname}}</p>
                    </header>
    <form  method="POST" action="/weekendstaff/{{$weekend->id}}" enctype="multipart/form-data">
         @csrf
          @method('PUT')
                    <div class="row">
                        <div class="col">
                            <label for="fname">First name:</label>
                            <input class="form-control" 
                            type="text" 
                            name="fname"
                            value="{{$weekend -> fname}}">
                             @error('fname')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="lname">Last name:</label>
                            <input class="form-control" 
                            type="text" 
                            name="lname"
                            value="{{$weekend -> lname}}">
                             @error('lname')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        
                        <div class="col">
                            <label for="id_number"> Id number:</label>
                            <input 
                            class="form-control" 
                            type="text" 
                            name="id_number"
                            value="{{$weekend -> id_number}}" >
                            @error('id_number')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="assigned_date">Pick Date:</label>
                            <input class="form-control"
                            type="date"
                              name="assigned_date"
                              value="{{$weekend -> assigned_date}}" >
                              @error('assigned_date')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="job_position">Job positon:</label>
                            <input class="form-control"
                            type="text"
                              name="job_position"
                              value="{{$weekend -> job_position}}" >
                               @error('job_position')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col">
                        </div>
                    </div>
                    
                    <div class="btwraper">
                        <button class="bt" >Edit</button>
                    </div>
                    
                </form>
            </div>

</x-layout>