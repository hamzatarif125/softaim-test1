<?php
if(isset($_GET['boxColor']))
{
    setcookie("boxColor", $_GET['boxColor'], time() + (86400 * 8), "/") or die('unable to create cookie');  
    header("Location: https://softaims-test2.herokuapp.com");
}
?>