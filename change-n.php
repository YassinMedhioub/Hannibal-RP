<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

    include "account/db_conn.php";

if (isset($_POST['on']) && isset($_POST['nn'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$on = validate($_POST['on']);
	$nn = validate($_POST['nn']);
    
    if(empty($on)){
      header("Location: mail.php?error=Old Adresse is required");
	  exit();
    }else if(empty($nn)){
      header("Location: mail.php?error=New Adresse is required");
	  exit();
    }else {
        $id = $_SESSION['id'];

        $sql = "SELECT name
                FROM users WHERE 
                id='$id' AND name='$on'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1){
        	
        	$sql_2 = "UPDATE users
        	          SET name='$nn'
        	          WHERE id='$id'";
        	mysqli_query($conn, $sql_2);
        	header("Location: mail.php?success=Your Adresse has been changed successfully! <br> Please re-login to apply the modification!!!");
	        exit();

        }else {
        	header("Location: mail.php?error=Incorrect Adresse");
	        exit();
        }

    }

    
}else{
	header("Location: mail.php");
	exit();
}

}else{
     header("Location: home.php");
     exit();
}