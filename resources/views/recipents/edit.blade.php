<x-layout>
   
    <form  method="POST" action="/Recipents/{{$Recipent->id}}" enctype="multipart/form-data">
         @csrf
          @method('PUT')
                    <div class="row">
                        <div class="col">
                            <label for="fname">First name:</label>
                            <input class="form-control"
                            type="text"
                            name="fname"
                            value="{{$Recipent -> fname}}">
                             @error('fname')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="lname">Last name:</label>
                            <input class="form-control"
                            type="text"
                            name="lname"
                            value="{{$Recipent -> lname}}">
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
                            value="{{$Recipent -> id_number}}" >
                            @error('id_number')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="user_name"> User name:</label>
                            <input
                            class="form-control"
                            type="text"
                            name="user_name"
                            value="{{$Recipent -> user_name}}" >
                            @error('user_name')
                            <p class="">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="job_position">Job positon:</label>
                            <input class="form-control"
                            type="text"
                              name="job_position"
                              value="{{$Recipent -> job_position}}" >
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
