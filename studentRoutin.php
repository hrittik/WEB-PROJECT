
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="studentSt.CSS">
		 <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
		  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="pass.css">
</head>
<body>

	<div class="bgimage">
		<div class="menu">
			
			<div class="leftmenu">
				<h4> Something </h4>
			</div>

			<div class="rightmenu">
				<ul>
					<a href="studentHome.php"><li> HOME </li></a>
					<a href="studentPass.php"><li> ChangePassword </li></a>
					<a href="studentRoutin.php"><li> routin</li></a>
					<a href=""><li> files</li></a>
					<a href=""><li> Download </li></a>
					<a href="logout.php"><li>Logout</li></a>
				</ul>
		 </div>
    </div>

	 <div class="rbox">
    
        
        <form method="post">
            
            
             <table border="1px">
             	<tr>
             		<td width="5%">
             			<P>SUBJECT</P>
             		</td>
             		<td width="5%" >
             			<P>SECTION</P>
             		</td>
             		<td width="5%">
             			<P>DAY</P>
             		</td>
             		<td width="5%">
             			<P>TIME</P>
             		</td>
             	</tr>
             			
             	
             	<tr>
             		<td>
             			<?php 
            						session_start(); 

									$u=$_SESSION['a'][0];
											
									require 'config.php';
                                    $statement="select * from coursestudent where id='$u' ";
           							$result = mysqli_query($conn, $statement);
           							
           							if (mysqli_num_rows($result) > 0)
            						{	
               							while($row = mysqli_fetch_assoc($result))
                						{	
                							$section=$row['section'];
                							$courseName=$row['courseName'];

                  							$sts="select * from routin where courseName='$courseName' AND section='$section' ";
                  							$result2=mysqli_query($conn, $sts);
                  							if(mysqli_num_rows($result) > 0)
                  							{
                  								while($row = mysqli_fetch_assoc($result2))
                  								{?>
                  									<p><?php echo $row['courseName'];
                  									   ?>
                  									</p> <?php	
                  								}

                  							}
                  						}
									}		

           							else
            						{
               							echo "INVALID";
           							}

            						mysqli_close($conn);

								?>
             		</td>	
             		<td>
             			<?php 
            						

									$u=$_SESSION['a'][0];
											
									require 'config.php';
                                    $statement="select * from coursestudent where id='$u' ";
           							$result = mysqli_query($conn, $statement);
           							
           							if (mysqli_num_rows($result) > 0)
            						{	
               							while($row = mysqli_fetch_assoc($result))
                						{	
                							$section=$row['section'];
                							$courseName=$row['courseName'];

                  							$sts="select * from routin where courseName='$courseName' AND section='$section' ";
                  							$result2=mysqli_query($conn, $sts);
                  							if(mysqli_num_rows($result) > 0)
                  							{
                  								while($row = mysqli_fetch_assoc($result2))
                  								{?>
                  									<p><?php echo $row['section'];
                  									   ?>
                  									</p> <?php	
                  								}

                  							}
                  						}
									}		

           							else
            						{
               							echo "INVALID";
           							}

            						mysqli_close($conn);

								?>
             		</td>
             		<td>
             			<?php 
            						

									$u=$_SESSION['a'][0];
											
									require 'config.php';
                                    $statement="select * from coursestudent where id='$u' ";
           							$result = mysqli_query($conn, $statement);
           							
           							if (mysqli_num_rows($result) > 0)
            						{	
               							while($row = mysqli_fetch_assoc($result))
                						{	
                							$section=$row['section'];
                							$courseName=$row['courseName'];

                  							$sts="select * from routin where courseName='$courseName' AND section='$section' ";
                  							$result2=mysqli_query($conn, $sts);
                  							if(mysqli_num_rows($result) > 0)
                  							{
                  								while($row = mysqli_fetch_assoc($result2))
                  								{?>
                  									<p><?php echo $row['day'];
                  									   ?>
                  									</p> <?php	
                  								}

                  							}
                  						}
									}		

           							else
            						{
               							echo "INVALID";
           							}

            						mysqli_close($conn);

								?>
             		</td>
             		<td>
             			<?php 
            						

									$u=$_SESSION['a'][0];
											
									require 'config.php';
                                    $statement="select * from coursestudent where id='$u' ";
           							$result = mysqli_query($conn, $statement);
           							
           							if (mysqli_num_rows($result) > 0)
            						{	
               							while($row = mysqli_fetch_assoc($result))
                						{	
                							$section=$row['section'];
                							$courseName=$row['courseName'];

                  							$sts="select * from routin where courseName='$courseName' AND section='$section' ";
                  							$result2=mysqli_query($conn, $sts);
                  							if(mysqli_num_rows($result) > 0)
                  							{
                  								while($row = mysqli_fetch_assoc($result2))
                  								{?>
                  									<p><?php echo $row['time'];
                  									   ?>
                  									</p> <?php	
                  								}

                  							}
                  						}
									}		

           							else
            						{
               							echo "INVALID";
           							}

            						mysqli_close($conn);

								?>
             		</td>
             	</tr>
             </table>
            
           
       	 

            
            
            
            
          
            
        </form>
        
    </div>
  </div>

		

</body>
</html>