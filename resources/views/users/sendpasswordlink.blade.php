<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

.buttoned {

	background: #d6b72d;
	padding: 11px  33px;
	color: rgb(19, 18, 18);
	border-radius: 8px;
	 right: 40%;
	border: none;
    font-size:18px;

}
.buttoned:hover{
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
.footer {
	color: #888;
	text-align: center;
   margin-top:16%;
}
.text-danger{
    color: #eacd7c;

}

</style>
<body>



<form method="POST" action="/users/sendpasswordlink">
    <img src="\images\log.png"  width="100px" height="100px"><br><br>
                <h1> Forgot Password  </h1>
                <hr>
                     <h4>EFPCHQ Guest Entry Management System</h4>
    @csrf
<CENTER>
    @if (session('success'))
        <div class="alert alert-success" style="color:white;">
            {{ session('success') }}
        </div>
    @endif <br>
    </CENTER>

        <label class="email">E-Mail Address:</label>

        <input id="email" type="email"  name="email"  placeholder="Enter your email"><br>

        <center><span class="text-danger">@error('email'){{ $message }}@enderror</span></center>

        <center><button type="submit" class="buttoned"> Send Password Link   </button></center>

        <div class="footer">Copyright &copy; 2022 &mdash; AUY3 Team  </div>

</div>



            </form>




</body>

</html>




</body>
</html>
