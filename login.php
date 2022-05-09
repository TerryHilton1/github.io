<!DOCTYPE html>
<html lang="en">
<head>
    <title>Internet Help Desk</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
    <header>
        <h1><a href="login.php">Login</a></h1>
    </header>

    <nav>
    <ul>
	 <li><a href="login.php">Home</a></li>
	 <li><a href="additional_help.php">Additional Help</a></li>
     <li><a href="login.php">Login</a>
	</ul> 
   </nav>
    <main>

        <h2>Login</h2>
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
        <br>

    </main>
    <footer>Copyright &copy; 2022 Terry Hilton</footer>
</body>
</html>