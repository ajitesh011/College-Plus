<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="" type="text/css">
    <title>Login</title>
</head>

<body >
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target="#abc">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="First Page.html">Canteen Automation System</a>

            </div>
            <div class="collapse navbar-collapse" id="abc">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="sign up.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
                    </li>

                </ul>
            </div>

        </div>
    </nav>
    <div style="margin-top: 100px;">
        <div class="container">
            <div class="row row-style">
                <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h1>Login</h1>


                        </div>
                        <div class="panel-body">
                            <p class="text-warning">Login to Order Food</p>
                            <form action="First Page.html">
                                <div class="form-group">
                                    <input class="form-control" type="email" placeholder="Email" name="email"
                                        required="true">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" placeholder="Password" name="password"
                                        required="true">
                                </div>
                                <!-- <div class="btn btn-primary btn-lg-active"><a href="First Page.html"
                                        style="color: white;">Login</a></div> -->
                                        <button type="submit" class="btn btn-primary btn-lg-active">Login</button>
                            </form>
                        </div>
                        <div class="panel-footer">Don't have an account? <a href="sign up.html">Register</a>
                            <!-- <button type="submit" class="panel-footer">Register</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
<html> 
    <head> 
        <title> User Login And Registration </title>  
        <link rel="stylesheet" type="text/css" href="style1.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="icon" type="image" href="https://www.bluehomepm.com/wp-content/uploads/2017/09/BlueHomePM-Favicon.png">
   
</head> 
<body> 


    <div class="container">  
        <div class="login-box">
        <div class="row"> 
            <div class="col-md-6 login-left"> 
                <h2> Login Here </h2> 
                <form action="validation.php" method="post"> 
                    <div class="form-group"> 
                        <label>Username</label> 
                        <input type="text" name="user" class="form-control" required > 
</div>  
<div class="form-group"> 
                        <label>Password</label> 
                        <input type="password" name="password" class="form-control" required > 
</div>  
<button type="submit" class="btn btn-primary"> LOGIN </button> 
</form> 
</div>  
</div>  
</div>
</div> 
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user = $_POST['user'];
        $password = $_POST['password'];
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "contacts";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `contactus` (`user`, `password`) VALUES ('$user', '$password')";
        $result = mysqli_query($conn, $sql);
 
        if($result){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your entry has been submitted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }

      }

    }

    
?>
</body> 
</html> 


