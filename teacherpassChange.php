<?php

session_start();
$old1=$_POST['oldpass'];
$new1=$_POST['newpass1'];
$new2=$_POST['newpass2'];

$id=$_SESSION['a'][0];
$pw=$_SESSION['a'][1];


if($old1==$pw)
{
	if($new1==$new2)
	{	
		 require 'config.php';

            $statement="update logintable set password='$new2' where id=$id ";
            $result = mysqli_query($conn, $statement);
            $_SESSION['a'][1]=$new2;
            
           header("location:teacherpass.php?acc=true");
           

	}
	else
	{		
		header("location:teacherpass.php?ditch1=true");

	}
}
else
{	 		//echo '<script language="javascript">';
			//echo 'alert("'.$id.'")';
			//echo '</script>';
	header("location:teacherpass.php?ditch1=true");
}


?>