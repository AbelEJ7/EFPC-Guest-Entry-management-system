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


<!--delete button navigation-->
<button onclick="document.getElementById('id01').style.display='block'" class="btnn" ><img src="/images/delete.png"></button>
        <div id="id01" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'" class="closeX" title="closeX Modal">&times;</span>
         <div class="modal-content">
            <div class="containerformodal">
            <h1 style="font-size:24px;">Delete Account!</h1>
            <br>
            <p style="font-size:17px; font-family:Times New Roman; font-weight:500;">Are you sure you want to delete this Account?</p>

            <div class="clearfix">
            <form method="POST" action="/interns/{{$inter->id}}">
            @csrf     {{--   cross site protection --}}
                                            @method('DELETE')
            <button class="deleteaccountbtn">Delete</button>
            </form>
            <button type="button" class="cancelmodalbtn"onclick="document.getElementById('id01').style.display='none'" >Cancel</button>
        </div>
        </div>
<!-- end of delete button navigation-->






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

