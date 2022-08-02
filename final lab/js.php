<html>
<body>
  <form action="" onsubmit="return validate()" method="POST">
      Username:<input type="text"id="uname"name="uname"><br>
	  Password:<input type="password"id="pass"name="pass">
	  <input type="submit" name="btnLogin" value="Login">
</form>
<script>

function validate()
{
    var username = document.getElementByid('uname');
	var password = document.getElementByid('pass');
	if(username.value==""|| password.value=="")
	{
	   alert("Username or Password is empty");
	   return false;
	}
	else if(password.value<8)
	{
		alert("password should be 8 character");
		return false;
	}
	else
	return true;
}
</script>

</body>
</html>