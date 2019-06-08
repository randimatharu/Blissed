<?php 
 session_start();
if(isset($_GET['logout']))
{
    unset($_SESSION['username']); //session eke tyena username eka ain karanawa
	session_destroy();
    header('location:../../index.php');
    
    
	exit;
}



?>