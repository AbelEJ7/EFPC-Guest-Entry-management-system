<x-report>
    <table class=" head-wrapper ">
        <thead>
            <th><div class="r-logo"> 
      <img src="{{public_path('images/log.png')}}">
    </div></th>
            <th>    <div class="reportof">Intern Report</div>
</th>
            <th>    <div class="r-date">Date:{{$date}}</div>
</th>
        </thead>
    </table>
    <div class="head-wrapper">
    
  </div>
  <div class="period">Monthly Report From {{$start}} - {{$date}}</div>
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
                                <th>Registered By</th>
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
                                 <td>{{$registeredby}}</td>
                            </tr>
                            @endforeach
                            @else
                            <tr >
                                <td></td>
                                <td></td>
                                <td>
                                    <p class="text-center"> No Recipent Found</p>
                                </td>
                                <td></td>
                                <td></td>
                              
                            </tr>
                            @endunless
                        <tbody>
                    </table>
                    
                </div>
                
</x-report>