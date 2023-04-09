<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
    <link href="css/home.css" rel="stylesheet" type="text/css" media="screen">
    <link href="css/register.css" rel="stylesheet" type="text/css" media="screen">
    <title>Register</title>    
    <?php
    $err="";
     if(isset($_POST["email"]) && isset($_POST["password"]))    
    {
        $email=$_POST['email'];
        $password1=$_POST['password'];
        $password1=md5($password1);

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "resume";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT EMAIL FROM users WHERE EMAIL='$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0)
        {
            $err="USER ALREADY EXIST!!";
        }
        else
        {

        $sql = "INSERT INTO users (EMAIL, PASSWORD)
        VALUES ('$email', '$password1')";

        if ($conn->query($sql) === TRUE) 
        {
            // echo "New record created successfully";
            header("Location:create.php");
        } 
        else 
        {
            $err="UNABLE TO CREATE USER!!";
        }
    }


      $conn->close();
    }
    ?>
</head>
<body>
    <header>
        <span id="heading">RESUME MAKER</span><br>
        Online CV maker created for the dreams and aspirations for better jobs.
    </header>
    
    <nav class="navbar" id="clearfix">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="about.html">About us</a></li>
        </ul>
    </nav>
    
    <section class="container">
        <div id="login-box">
            <div id="mid">
              <h1>Sign up</h1>
              <form method="post">
                <br><?php echo '<span id="alert">'.$err.'</span>'; ?>
			  <input type="text" name="name" placeholder="Full Name" required="required"/>
              <input type="text" name="email" placeholder="E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required="required"/>
              <input type="password" name="password" placeholder="Password" required="required" />
              <input type="submit" name="signup_submit" value="Sign me up" />
              
              </form>
            </div>
        </div>    
    </section>
</body>
</html>
