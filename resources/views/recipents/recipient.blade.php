<x-layout>
    <div class="description">
        <h2>Recipients List</h2>
    </div>
     @include('partials._search')
          @include('partials.flash-message')

                <div class="table-wrapper">
                    <table class="fl-table">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Id number</th>
                                <th>Jop position</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @unless($recipents->isEmpty())
                            @foreach ($recipents as $Recipent)
                            <tr>
                                <td>{{$Recipent->fname}}</td>
                                <td>{{$Recipent->lname}}</td>
                                <td>{{$Recipent->id_number}}</td>
                                <td>{{$Recipent->job_position}}</td>

                                <td class="action">
                                    <a href="/Recipents/{{$Recipent->id}}/edit">
                                        <button class="btnn"> <img src="/images/Edit.png" alt=""></button>
                                    </a>

                                     <form method="POST" action="/Recipents/{{$Recipent->id}}">
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
                            <tr class="border-gray-30o">
                                <td></td>
                                <td></td>
                                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                    <p class="text-center"> No Recipent Found</p>
                                </td>
                                <td> </td>

                             </tr>
                            @endunless
                        <tbody>
                    </table>

                </div>
                <div class="addbutton">
                    <a href="/Recipents/addr">
                     <button class="fixedbutton">
                    Add recipient
                     </button>
                    </a>

            </div>



</x-layout>
