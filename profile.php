<?php 
session_start();

$sessionfullname = $_SESSION['full-name'];



if( isset( $_POST['login']) ){

	$email = $_POST['email'];
    $password = $_POST['password'];
    
    $sessionfullname = $_SESSION['full-name'];
    $sessionemail    = $_SESSION['email'];
    $sessionpassword = $_SESSION['password'];

    if( $email == $sessionemail && $password == $sessionpassword ){
    	$_SESSION['loggedin'] = 'yes';
    }

}

if( isset( $_SESSION['loggedin'] ) ){
	echo "HELLOW " .$sessionfullname. " YOU ARR now login Enjoy!!!!!!!!. </br> <a href='logout.php'>LOGOUT</a> ";
}else{
	header('location: index.php');
}





