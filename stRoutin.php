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
					<a href=""><li> routin</li></a>
					<a href=""><li> files</li></a>
					<a href=""><li> Download </li></a>
					<a href="logout.php"><li>Logout</li></a>
				</ul>
		 </div>
    </div>

	 <div class="passbox">
    
        
        <form action="stpasschange.php" method="post">
            
            <p>Old Password</p>
            <input type="password" name="oldpass" placeholder="Old Password">
            <p>New Password</p>
            <input type="password" name="newpass1" placeholder="New Password">
            <p>Confirm Password</p>
            <input type="password" name="newpass2" placeholder="Confirm Password"></br></br>
            <input type="submit" name="passconfirm" value="confirm">
            <h2> <?php echo $error;?> </h2>
            
        </form>
        
    </div>
  </div>

		

</body>
</html>