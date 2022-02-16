<?php

session_start();

?>

<html>
    <head>
        <title>Login</title>
    </head>
    <body>
	    
    <h1>Login</h1>
		<form class ="form" action="" method="POST">
			<input class="input" type="text" name="username" placeholder="Username"/><br>
			<input class="input" type="password" name="password" placeholder="Password"/><br>
			<input   type="submit" name="login" value="Login" class="btn"/><br>
		</form>
        <h3>Register</h3>
    <a href="register_kviz.php">Registrujte se</a>
    </body>
</html>

<?php

$file = fopen("register_database.txt", "r");
$size = filesize("register_database.txt");
$read = fread($file, $size);

$explode1 = explode("\n", $read);

$usernames = [];
$username_counter = 0;
$passwords = [];
$password_counter = 0;
for($i=0;$i<count($explode1)-1;$i++)
{
    $explode2 = explode("---", $explode1[$i]);
    $usernames[$username_counter] = $explode2[0];
    $passwords[$password_counter] = $explode2[1];
    $username_counter++;
    $password_counter++;
}
if(isset($_POST["login"]))
{
    if($_POST["username"]!="" && $_POST["password"]!="")
    {
        echo $_POST["username"].$_POST["password"];
        $num_user = array_search($_POST["username"],$usernames);
        $num_pass = array_search($_POST["password"],$passwords);
        echo $num_user.$num_pass;
        if($num_user == $num_pass && $num_user!="" && $num_pass!="")
        {
            session_start();
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];

            header("location:nikola_kviz.php");
        }
        else
        {
            echo "<span style='color:red;'>Insert Username and Password!</span>";
        }
    }
    elseif($_POST["username"]=="" || $_POST["password"]=="")
    {
        echo "<span style='color:red;'>Insert Username and Password!</span>";
    }

}

?>
