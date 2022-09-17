<x-layout>


<div class="containerforaccount"><br>
 <label class="personalLabel">Personal Info </label><br>
 
<form action="">

        @csrf
                @method('PUT')


<label class="innerProfilelabel">Name:</label><br>
 <input type="text"  placeholder="Enter Your Full name here" class="textboxesProfile" name="name" value="{{auth()->user()->name}}"autocomplete="off"> <br>

<label class="innerProfilelabel">Username:</label><br>
 <input type="text"  placeholder="Enter a usable username" class="textboxesProfile" name="userProfile"value="{{auth()->user()->name}}"autocomplete="off"> <br>

 <label class="innerProfilelabel">Email:</label><br>
 <input type="text"  placeholder="Enter Your Full name here" class="textboxesProfile" name="emailProfile"value="{{auth()->user()->email}}"autocomplete="off"> <br>

<label class="innerProfilelabel">Password:</label> <br>
 <input type="password"  placeholder="Password" class="textboxesProfile" name="password" autocomplete="off"> <br>

 <label class="innerProfilelabel"> Confirm Password:</label><br>
 <input type="password"  placeholder="Password" class="textboxesProfile" name="password"autocomplete="off"> <br><br>

<button class="btn-primary"style="padding:7px; margin-left:210px; border-radius:20px; width:170px;"> Save changes</button>


</form>




</div>



<div class="containerforcolors">
<center><label class="personalLabel">Modes </label><br></center>


<button class="btn-light"style="padding:7px; margin-left:15px; border-radius:20px; width:120px; margin-top:3%;">Light mode </button>
<button class="btn-dark"style="padding:7px; margin-left:55px; border-radius:20px; width:120px; margin-top:3%; position:absolute;"> Dark mode </button>
<hr>

 <label class="personalLabel">Language </label>&nbsp&nbsp&nbsp&nbsp
 <select name="" Style="width:40%;">
    <option value="">English</option>
    <option value="">Amharic</option>
 </select>


</div>



<div class="containerforimage">

                     <img  class="profilesimg"src="\images\noProfilepicture.png"><br>

              <label class="Userlabel">User: </label> <label class="Usernamelabel">{{auth()->user()->name}} </label><br>
              <img  class="uploaderr"src="\images\uploader.png">
              <div class="buttonsh">

              <button class="btn-primary" style="padding:10px; margin-left:20px; border-radius:20px; width:300px;" > Save Image</button>
              <button class="btn-danger"style="margin-top:4px;padding:10px; margin-left:20px; border-radius:20px;width:300px;"> Remove Image</button>
              </div>





   <link class="jsbin"href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css"rel="stylesheet"/>
    <script
      class="jsbin"
      src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"
    ></script>
    <script
      class="jsbin"
      src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"
    ></script>


</x-layout>
