<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

    include "account/db_conn.php";

if (isset($_POST['opu']) && isset($_POST['npu'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$opu = validate($_POST['opu']);
	$npu = validate($_POST['npu']);
    
    if(empty($opu)){
      header("Location: pseudo.php?error=Old pseudo is required");
	  exit();
    }else if(empty($npu)){
      header("Location: pseudo.php?error=New  pseudo is required");
	  exit();
    }else {
        $id = $_SESSION['id'];

        $sql = "SELECT user_name
                FROM users WHERE 
                id='$id' AND user_name='$opu'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1){
        	
        	$sql_2 = "UPDATE users
        	          SET user_name='$npu'
        	          WHERE id='$id'";
        	mysqli_query($conn, $sql_2);
        	header("Location: pseudo.php?success=Your pseudo has been changed successfully! <br> Please re-login to apply the modification!!!");
	        exit();

        }else {
        	header("Location: pseudo.php?error=Incorrect pseudo");
	        exit();
        }

    }

    
}else{
	header("Location: pseudo.php");
	exit();
}

}else{
     header("Location: home.php");
     exit();
}