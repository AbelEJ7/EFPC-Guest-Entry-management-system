<x-layout>
<br><br>
            <div class="overview-boxes">
                <div class="box " style="padding:60px 20px;color:white; background: #0a2558; box-shadow: rgb(17, 0, 255) 0px 20px 30px 0px;">
                    <div class="right-side">
                        <div class="box-topic">Total Recipients</div>
                        <div class="number">{{$totalemps}}</div>

                    </div>
                    <i class='bx bxs-user'style="font-size: 64px;"  ></i>
                </div>
                <div class="box" style="padding:60px 20px;color:white; background: #0a2558; box-shadow: rgb(17, 0, 255) 0px 20px 30px 0px;">
                    <div class="right-side">
                        <div class="box-topic">Total Interns</div>
                        <div class="number">{{$totalints}}</div>

                    </div>
                     <i class='bx bxs-plus-square'style="font-size: 64px;"  ></i>
                </div>
                <div class="box" style="padding:60px 20px;color:white; background: #0a2558; box-shadow: rgb(17, 0, 255) 0px 20px 30px 0px;">
                    <div class="right-side">
                        <div class="box-topic">Todays Guests</div>
                        <div class="number">{{$totalguests}}</div>

                    </div>
                    <i class='bx bxs-car'style="font-size: 64px;"  ></i>
                </div>

                
                <div class="box" style="padding:60px 20px;color:white; background: #0a2558; box-shadow: rgb(17, 0, 255) 0px 20px 30px 0px;">
                    <div class="right-side">
                        <div class="box-topic">Guns registered today</div>
                        <div class="number">{{$totalguns}}</div>

                    </div>
                    <i class='bx bxs-plus-square'style="font-size: 64px;"  ></i>
                </div>
                <div class="box" style="padding:60px 20px;color:white; background: #0a2558; box-shadow: rgb(17, 0, 255) 0px 20px 30px 0px;">
                    <div class="right-side">
                        <div class="box-topic">Cars added today</div>
                        <div class="number">{{$totalcars}}</div>

                    </div>
                    <i class='bx bxs-car'style="font-size: 64px;"  ></i>
                </div>
                <div class="box" style="padding:60px 20px;color:white; background: #0a2558; box-shadow: rgb(17, 0, 255) 0px 20px 30px 0px;">
                    <div class="right-side">
                        <div class="box-topic">Weekly entries recorded</div>
                        <div class="number">{{$totalweekenders}}</div>

                    </div>
                      <i class='bx bxs-calendar'style="font-size: 64px;"  ></i>
                </div>
            </div>




</x-layout>
