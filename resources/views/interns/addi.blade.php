<x-layout>
    
    <form  method="POST" action="/addintern" enctype="multipart/form-data">
         @csrf
                    <div class="row">
                        <div class="col">
                            <label for="fname">First name:</label>
                            <input class="form-control" 
                            type="text" 
                            name="fname"
                            value="{{old('fname')}}">
                             @error('fname')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="lname">Last name:</label>
                            <input class="form-control" 
                            type="text" 
                            name="lname"
                            value="{{old('lname')}}">
                             @error('lname')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="role"> Role:</label>
                            <input 
                            class="form-control" 
                            type="text" 
                            name="role"
                            value="{{old('role')}}" >
                            @error('role')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="supervisor">Supervisor:</label>
                            <input class="form-control"
                            type="text"
                              name="supervisor"
                              value="{{old('supervisor')}}" >
                               @error('supervisor')
                            <p class="">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="School_id">School id:</label>
                            <input class="form-control"
                            type="text"
                              name="School_id"
                              value="{{old('School_id')}}" >
                               @error('School_id')
                            <p class="">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="phone">Phone:</label>
                            <input class="form-control"
                            type="text"
                              name="phone"
                              value="{{old('phone')}}" >
                               @error('phone')
                            <p class="">{{$message}}</p>
                            @enderror
                        </div>
                        
                        <div class="col">
                            <label for="school">School:</label>
                            <input class="form-control"
                            type="text"
                              name="school"
                              value="{{old('school')}}" >
                              @error('school')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="photo">photo:</label>
                            <input class="form-control"
                            type="file"
                              name="photo"
                              value="{{old('photo')}}" >
                              @error('photo')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        
                        
                        <div class="col">
                        </div>
                    </div>
                    <div class="btwraper">
                        <button class="bt" type="submit">Add Intern</button>
                    </div>
                    
                </form>
            </div>

</x-layout>