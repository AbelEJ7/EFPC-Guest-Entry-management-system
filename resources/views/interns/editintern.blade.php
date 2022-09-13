<x-layout>
   
    <form  method="POST" action="/interns/{{$intern->id}}/store" enctype="multipart/form-data">
         @csrf
          @method('PUT')


                    <div class="row">
                        <div class="col">
                            <label for="fname">First name:</label>
                            <input class="form-control"
                            type="text"
                            name="fname"
                            value="{{$intern -> fname}}">
                            @error('fname')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="lname">Last name:</label>
                            <input class="form-control"
                            type="text"
                            name="lname"
                            value="{{$intern -> lname}}">
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
                            value="{{$intern -> role}}" >
                            @error('role')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="supervisor">supervisor:</label>
                            <input class="form-control"
                            type="text"
                              name="supervisor"
                              value="{{$intern -> supervisor}}" >
                               @error('supervisor')
                            <p class="">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="School_id">School Id:</label>
                            <input class="form-control"
                            type="text"
                              name="School_id"
                              value="{{$intern -> School_id}}" >
                               @error('School_id')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="Phone">Phone:</label>
                            <input class="form-control"
                            type="text"
                              name="Phone"
                              value="{{$intern -> Phone}}" >
                               @error('Phone')
                            <p class="">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="school">school:</label>
                            <input class="form-control"
                            type="text"
                              name="school"
                              value="{{$intern -> school}}" >
                               @error('school')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>


                        <div class="col">
                            <label for="fname">photo:</label>
                            <input class="form-control"
                             type="file"
                             name="fname"
                             >


                        </div>
                        <div class="col">
                        </div>
                    </div>

                    <div class="btwraper">
                        <button class="bt" >Edit</button>
                    </div>

                </form>


</x-layout>
