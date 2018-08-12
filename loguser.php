<?php
session_start(); //start the PHP_session function 

$u=$_POST['un'] ;
$p=$_POST['pw'] ;
$_SESSION['a'] = array();
$_SESSION['a'][]=$_POST['un'];
$_SESSION['a'][]=$_POST['pw'];

			 require 'config.php';

            $statement="select * from loginTable where id='$u' AND password='$p'";
            $result = mysqli_query($conn, $statement);

           if (mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                   $_SESSION['id'] = $u;
        			if($row['type']==1)
        			
        			{	

        				header("location:studentHome.php");


        			}


        			elseif ($row['type']==2) 

        			{
        				echo"yes2";
        				# code...
        			}


        			else
        			{	
        				echo"no";


        			}
       
                }
            }
            else
            {
               header("location:login.php?invalid=true");
            }
            mysqli_close($conn);

    


?>