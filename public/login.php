<?php

class loginclass
{
    public function init_login()
    {
        $conn = mysqli_connect('mysql.dev.localhost', 'root', 'athene', 'nutten') or die ('Unable to connect');

        if (isset($_POST['login'])) {
            $Username = $_POST['username'];
            $Pass = $_POST['password'];

            $select = mysqli_query($conn, " SELECT * FROM user WHERE username = '$Username'");
            $row = mysqli_fetch_array($select);

            if (password_verify($Pass, $row['password'])) {
                $_SESSION["Username"] = $row['username'];
                $_SESSION["Pass"] = $row['password'];
            } else {
                echo '<script type = "text/javascript">';
                echo 'alert("Invalid Username or Password!");';
                echo 'window.location.href = "index.php" ';
                echo '</script>';
            }
        }
        if (isset($_SESSION["Username"])) {
            header("Location:loggedin.php");
        }
    }
}

?>