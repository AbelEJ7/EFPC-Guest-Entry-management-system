<x-layout>
    <div class="description">
        <h2>Interns List</h2>
    </div>
     @include('partials._search')
     @include('partials.flash-message')
     <div class="addbtnn-a ">
        <a href="/interns/addi">
                     <button class="addbtnn">
                    Add intern
                     </button>
                    </a>
     </div>
       
                <div class="table-wrapper">
                    <table class="fl-table">
                        <thead>
                            <tr>

                                <th>First Name</th>
                                <th>Last Name</th>
                                <th> Role </th>
                                <th> School </th>
                                <th>School_id</th>
                                <th>phone</th>
                                <th>Supervisor</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @unless($interns->isEmpty())
                            @foreach ($interns as $inter)
                            <tr>

                                <td>{{$inter->fname}}</td>
                                <td>{{$inter->lname}}</td>
                                <td>{{$inter->role}}</td>
                                <td>{{$inter->school}}</td>
                                <td>{{$inter->School_id}}</td>
                                <td>{{$inter->phone}}</td>
                                <td>{{$inter->supervisor}}</td>
                                <td class="btnnap">
                                           <a href="/interns/{{$inter->id}}/editintern" class="btn btn-sm btn-primary"><i class='bx bx-edit-alt' ></i></i></a>
                                        
                                    <a href="/interns/{{$inter->id}}/pdff" class="btn btn-sm btn-success">
                                        <i class='bx bx-id-card'></i>
                                    </a>
                                    <a class="btn btn-sm btn-danger">
                                       </i><form method="POST" action="/interns/{{$inter->id}}">
                                                 @csrf     {{--   cross site protection --}}
                                             @method('DELETE')
                                 <button class="btnn">
                                 <i class='bx bx-trash' ></i>
                                         </button>
                                              </form>
                                    </a>
                                      
                                            </td>

                            </tr>
                            @endforeach
                            @else
                            <tr >
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <p class="text-center"> No Recipent Found</p>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>

                            </tr>
                            @endunless
                        <tbody>
                    </table>

                </div>
                

            <div class="">
            {{$interns->links()}}
            </div>

</x-layout>
