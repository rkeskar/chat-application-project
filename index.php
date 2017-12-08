
<!DOCTYPE html>
<html>
<head>
	<title>Drexel Group Chat</title>
	<h1 align="center" style="color: yellow">Drexel University Sample Group Chat</h1>
	<p align="center" style="color: yellow">A group chat for Drexel Alumni</p>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	    <div id = "main" align="center">
		<div id="info">


	    <h2>Sign In for existing users</h2>
		 <form action= "login.php" method="post">
		   <label>UserID</label>
		     &nbsp;&nbsp;<input type="text" name="uname" placeholder="User name"><br><br>
		   <label>Password</label>
		  <input type="Password" name="pass" placeholder="Password"><br><br>
          <button style="background-color: #6495ed;color: blue;" type="submit"><b>Login</b>	
          </button>		
        </form>


      <form action="signup.php" method="post">
	    <h2>Register</h2>
	    <label>Username:</label>
	     <input type="text" name="uname" placeholder="Username"><br><br>
	      <label>Drexel Email ID:</label>
	    <input type="Email" name="Email" placeholder="Email"><br><br>

	   <label>Password:</label>
	   <input type="Password" name="Password" placeholder="Password"><br><br>
	   <button style="background-color: #6495ed;color: blue;" type="submit"><b>Sign Up</b>	
       </button>

    </form>

    </div>
	</div>

</body>
</html>