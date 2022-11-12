<?php
    session_start();
    $_SESSION['username_new']=$_POST['username_new'];
    $_SESSION['passkey_new']=$_POST['passkey_new'];
    if((($_SESSION['passkey_new'])=='123')) 
    {
        if(($_SESSION['username_new'])=='admin_main')
        
        header("Location:removedetails.php");
    }
    else{
        header("Location:logout.php");

    }
?>
