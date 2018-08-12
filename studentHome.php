<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="studentSt.CSS">
		 <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
		  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
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
					<a href=""><li> routin</li></a>
					<a href=""><li> files</li></a>
					<a href=""><li> Download </li></a>
					<a href="logout.php"><li>Logout</li></a>
				</ul>
			</div>

		</div>

		<div class="tbl">
			<table border="1px">
				<tr>
					<td>
						<div class="text">
							<ul>
								<li> <h4> ID </h4> </li>
								<li> <h4> Name </h4> </li>
								<li> <h4> PHONE </h4> </li>
								<li> <h4> ADDRESS </h4> </li>
								<li> <h4> EMAIL </h4> </li>
							</ul>
						</div>
					</td>
					<td width="5px">
						<div class="text">
							<ul>
								<li> <h4>:</h4> </li>
								<li> <h4>:</h4> </li>
								<li> <h4>:</h4> </li>
								<li> <h4>:</h4> </li>
								<li> <h4>:</h4> </li>
							</ul>
						</div>
						
					</td>
					<td>
						<div class="text">
							<ul>
								<li> 
									<h4> 	
										<?php 

											session_start(); //start the PHP_session function 

											$u=$_SESSION['a'][0];
											
											require 'config.php';
                                        	$statement="select * from studentinfo where id='$u' ";
           								 	$result = mysqli_query($conn, $statement);
           								 	if (mysqli_num_rows($result) > 0)
            									{	
               								 		while($row = mysqli_fetch_assoc($result))
                										{
                  											 $_SESSION['id'] = $u;
                  											 echo $row['id'];
                  									    }
        										}			
           									else
            									{
               										echo "INVALID";
           										}
            								mysqli_close($conn);
            								


           								?> 
           							</h4> 
           						</li>
           						<li> 
									<h4> 	
										<?php 

											 //start the PHP_session function 

											$u=$_SESSION['a'][0];
											
											require 'config.php';
                                        	$statement="select * from studentinfo where id='$u' ";
           								 	$result = mysqli_query($conn, $statement);
           								 	if (mysqli_num_rows($result) > 0)
            									{	
               								 		while($row = mysqli_fetch_assoc($result))
                										{
                  											 $_SESSION['id'] = $u;
                  											 echo $row['name'];
                  									    }
        										}			
           									else
            									{
               										echo "INVALID";
           										}
            								mysqli_close($conn);
            								


           								?> 
           							</h4> 
           						</li>
           						<li> 
									<h4> 	
										<?php 

											 //start the PHP_session function 

											$u=$_SESSION['a'][0];
											
											require 'config.php';
                                        	$statement="select * from studentinfo where id='$u' ";
           								 	$result = mysqli_query($conn, $statement);
           								 	if (mysqli_num_rows($result) > 0)
            									{	
               								 		while($row = mysqli_fetch_assoc($result))
                										{
                  											 $_SESSION['id'] = $u;
                  											 echo $row['phone'];
                  									    }
        										}			
           									else
            									{
               										echo "INVALID";
           										}
            								mysqli_close($conn);
            								


           								?> 
           							</h4> 
           						</li>
           						<li> 
									<h4> 	
										<?php 

											 //start the PHP_session function 

											$u=$_SESSION['a'][0];
											
											require 'config.php';
                                        	$statement="select * from studentinfo where id='$u' ";
           								 	$result = mysqli_query($conn, $statement);
           								 	if (mysqli_num_rows($result) > 0)
            									{	
               								 		while($row = mysqli_fetch_assoc($result))
                										{
                  											 $_SESSION['id'] = $u;
                  											 echo $row['address'];
                  									    }
        										}			
           									else
            									{
               										echo "INVALID";
           										}
            								mysqli_close($conn);
            								


           								?> 
           							</h4> 
           						</li>
           						<li> 
									<h2> 	
										<?php 

											 //start the PHP_session function 

											$u=$_SESSION['a'][0];
											
											require 'config.php';
                                        	$statement="select * from studentinfo where id='$u' ";
           								 	$result = mysqli_query($conn, $statement);
           								 	if (mysqli_num_rows($result) > 0)
            									{	
               								 		while($row = mysqli_fetch_assoc($result))
                										{
                  											 $_SESSION['id'] = $u;
                  											 echo $row['email'];
                  									    }
        										}			
           									else
            									{
               										echo "INVALID";
           										}
            								mysqli_close($conn);
            								


           								?> 
           							</h2> 
           						</li>
							</ul>
						</div>
						
					</td>
				</tr>
			</table>
		</div>

	</div>

</body>
</html>