<?php
$error="";
    if ( isset($_GET['invalid']) && $_GET['invalid'] == true )
    {
        $error="Wrong password or Id";
    }
    else if(isset($_GET['logout']) && $_GET['logout'] == true)
    {
        $error= "Successfully logout";
    }
?>
<head>

<title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="st.css">
<body>
    <div class="loginbox">
    <img src="avatar.png" class="avatar">
        <h1> Login Here </h1>
        <form action="loguser.php" method="post">
            <p>Username</p>
            <input type="text" name="un" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="pw" placeholder="Enter Password">
            <input type="submit" name="" value="Login">
            <h2> <?php echo $error;?> </h2>
        </form>
        
        
    </div>

</body>
</head>
</html>