<!DOCTYPE html>
<html>
<head>
    <title>Internet Help Desk</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
    <header>
        <h1>Internet Help Desk</h1>
    </header>

    <nav>
    <ul>
	 <li><a href="login.php">Home</a></li>
	 <li><a href="additional_help.php">Additional Help</a></li>
     <li><a href="login.php">Login</a>
	</ul> 
   </nav>
    <main>

        <h2>Sign-Up</h2>
        <form action="." method="post" >
        <input type="hidden" name="action" value ="login">

        <label>Email:</label>
        <input type="text" name="Email" id="email">
        
        <label>Username</label>
        <input type="text" name="Name" id="name">
        
        <label>Password</label>
        <input type="text" name="Pass" id="pass">
       
        <input type="submit" value="Log In">
        </form>
            
        </form>
        <br>

    </main>
</body>
</html>