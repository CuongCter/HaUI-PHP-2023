<?php
    session_start();
    if(isset($_SESSION['msv'])){
        unset($_SESSION['msv']);
    }
    echo '<meta http-equiv="refresh" content="0;url=login">'; 
?>