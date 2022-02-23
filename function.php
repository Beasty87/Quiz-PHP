<?php

// funkcija Login forma


function login_form()
{
    echo '<form action="login.php" method="POST">';
    //echo "Username";
    echo '<input type="text" name="username" style="color:black;" placeholder="Username"> ';
    //echo "Password";
    echo '<input type="password" name="password" style="color:black;" placeholder="Password"> ';
    echo '<input type="submit" name="login" value="Login" style="color:black;cursor:pointer;">';
    echo '</form>';

    if(isset($_GET["logged_out"]))
    {
        echo "You have successfully been logged out";
    }

}

// Funkcija Logout

function logged_in_panel()
{
    echo "<form action='logout.php' method='POST'>";
    echo "Welcome " . $_SESSION["username"];
    echo '<input type="submit" name="logout" value="Logout" style="color:black;margin-left:10px;">';
    echo "</form>";
}


?>
