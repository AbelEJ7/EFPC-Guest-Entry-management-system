<x-layout>
    
    <div class="description">
        <h2>Weekends List</h2>
    </div>
    @include('partials._search')
         @include('partials.flash-message')

                <div class="table-wrapper">
                    <table class="fl-table">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Id Number </th>
                                <th>Job Positioon</th>
                                <th>Work Date</th>
                                <th>Action</th>
                
                            </tr>
                        </thead>
                        <tbody>
                            @unless($weekends->isEmpty())
                            @foreach ($weekends as $weekend)
                            <tr>
                                <td>{{$weekend->fname}}</td>
                                <td>{{$weekend->lname}}</td>
                                <td>{{$weekend->id_number}}</td>
                                <td>{{$weekend->job_position}}</td>
                                <td>{{$weekend->assigned_date}}</td>
                                <td class="action">
                                    <a href="/weekendstaff/{{$weekend->id}}/edit">
                                        <button class="btnn"> <img src="/images/edit.png" alt=""></button>
                                    </a>
                                   
                                     <form method="POST" action="/weekendstaff/{{$weekend->id}}">
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
                              <td></td>
                                <td></td>
                            </tr>
                            @endunless
                        <tbody>
                    </table>
                    
                </div>
                <div class="addbutton">
                    <a href="/weekendstaff/add">
                     <button class="fixedbutton">
                    Add Staff
                     </button>
                    </a>
               
            </div>
<div class="">
            {{$weekends->links()}}
            </div>
            

</x-layout>