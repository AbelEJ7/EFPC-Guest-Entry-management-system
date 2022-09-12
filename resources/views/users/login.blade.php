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

</style>
<body>

            <form method="POST" action="/users/authenticate">

           <img src="\images\log.png"  width="100px" height="100px"><br><br>
            <h1> Login </h1>
            <h4> EFPCHQ Guest Entry Management System</h4>

            @csrf

                    <i  style="color: #eacd7c;" class="fas fa-user"></i>
                    <label> Email</label>
                    <input type="text"placeholder="Email" name="email"value="{{old('email')}}" >

                    @error('email')
                    <p class="error">{{$message}}</p>
                     @enderror





                    <i style="color: #eacd7c;" class="fas fa-lock"></i> <label> Password</label>
                    <input type="password"
                    placeholder="Password"
                    name="password"
                    value="{{old('password')}}"
                     >
                     @error('password')
                                <p class="error">{{$message}}</p>
                            @enderror






               <a href="#">Forgot password?</a>

                    <button class="button" type="submit"  >
                      <label class="loginlbl">Login</label>
                   </button>



                        <a href="/register" >Register</a>



            </form>




</body>

</html>
