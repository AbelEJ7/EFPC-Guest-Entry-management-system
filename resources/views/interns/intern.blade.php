<x-layout>
    <div class="description">
        <h2>Interns List</h2>
    </div>
     @include('partials._search')
     @include('partials.flash-message')
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
                                <td class="btnnwrap">

                                        <a href="/interns/{{$inter->id}}/editintern">
                                        <button class="btnn"> <img src="/images/edit.png" alt=""></button>
                                    </a>
                                    <a href="/interns/{{$inter->id}}/pdff">
                                        <button class="btnn"><img src="/images/id.png" alt=""></button>
                                    </a>
                                     <form method="POST" action="/interns/{{$inter->id}}">
                                                 @csrf     {{--   cross site protection --}}
                                            @method('DELETE')
                                 <button class="btnn">
                                 <img src="/images/delete.png" alt="">
                                         </button>
                                              </form>



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
                <div class="addbutton">
                    <a href="/interns/addi">
                     <button class="fixedbutton">
                    Add intern
                     </button>
                    </a>

            </div>

            <div class="">
            {{$interns->links()}}
            </div>

</x-layout>
