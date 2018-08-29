

 <head>
<title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="st.css">
<body>
    <div class="loginbox">
    <img src="avatar.png" class="avatar">
        <h1> Login Here </h1>
        <form>
            <?php
            session_start();
            $u=$_SESSION['id'];
            require 'config.php';

            $statement="select * from student where id='$u' ";
            $result = mysqli_query($conn, $statement);

           if (mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<h1>".$row['Name']."</h1>";
                }
            }
            else
            {
                echo "Nothing found in db";
            }
            mysqli_close($conn);
        ?>
            
        </form>
        
    </div>

</body>
</head>
</html>