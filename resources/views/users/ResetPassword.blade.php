<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                  <!-- <title>Login Form | CodingLab</title> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<style>
 body {

	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
	flex-direction: column;
    background:  rgb(10,10,30);



}
form {
    border:orange;
    border-width:4px;
    border-style:solid;

	width: 400px;
    height: 470px;
	padding: 30px;
	background: #010911;
	border-radius: 15px;

}
h1 {
	text-align: center;
	margin-bottom: 50px;
    color: #eacd7c;
    font-family: Arial, Helvetica, sans-serif;

}
h4{
    text-align: center;
	margin-bottom: 40px;
    font-size:large;
    color: #ccb67a;
    font-family:"Roboto",sans-serif;
}
input {
	display: block;
	border: 2px solid  #eacd7c;
	width: 75%;
	padding: 10px;
	margin: 10px auto;
	border-radius: 5px;
}
label {
	color: #eacd7c;
	font-size: 18px;
	padding: 10px;
}

button {
	float: right;
	background: #d6b72d;
	padding: 11px  33px;
	color: rgb(19, 18, 18);
	border-radius: 8px;
	margin-right: 130px;
	border: none;

}
button:hover{
	opacity: 0.8;

}
.loginlbl{

 color:black;
 }
img{
    border-radius: 90%;
	justify-content: center;
    align-items: center;
    display: flex;
	padding-left: 19px;
	top: 40px;
    position: absolute;
  left: calc(50% - 75px);
}
.error{
    color:#eacd7c;
    font-weight: 500;
  margin: 10px;
}
.text-danger{
color: white;
}

</style>
<body>


<form action="{{ route('reset.password') }}" method="post" autocomplete="off">


<form method="POST" action="/users/authenticate">

<img src="\images\log.png"  width="100px" height="100px"><br><br>

<h4>Reset password</h4><hr>



  @if (Session::get('fail'))
      <div style="color:red;" >
          {{ Session::get('fail') }}
      </div>
  @endif

  @if (Session::get('success'))
  <div  style="color:White;">
      {{ Session::get('success') }}
  </div>
@endif



  @csrf
  <input type="hidden" name="token" value="{{ $token }}">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ $email ?? old('email') }}">

        <center><span class="text-danger">@error('email'){{ $message }}@enderror</span></center>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Enter password" value="{{ old('password') }}">

        <center><span class="text-danger">@error('password'){{ $message }}@enderror</span> </center>

    </div>
    <div class="form-group">
      <label for="password">Confirm password</label>
      <input type="password" class="form-control" name="password_confirmation" placeholder="Enter password" value="{{ old('password_confirmation') }}">

      <center><span class="text-danger">@error('password_confirmation'){{ $message }}@enderror</span> </center>
  </div>

        <button type="submit" class="btn btn-primary">Reset password</button>

    <br>

</form>






</body>

</html>
