<?php

//get session

session_start();
if(isset($_SESSION['username'])){
    echo "Username-- ";
    echo $_SESSION['username'];
    echo "<br>";
    echo "password-";
    echo $_SESSION['password'];
}else{
    echo "plsease login";
}

?>