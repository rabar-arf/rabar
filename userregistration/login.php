<html>
<head>
<title>User Login And Registration</title>  
    <link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="bootstrap-4.5.0-dist\css\bootstrap.min.css">
</head>
    <body>
    <div class="container">
        <div class="login-box">
        <div class="row">
        <div class="col-md-6 login-left" >
            <h2>Login Here</h2>
            <form action="validation.php" method="post">
            <div class="form-group">
                <label>username</label>
                <input type="text" name="user" class="form-control" required>
                </div>
         <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button> &nbsp &nbsp &nbsp &nbsp &nbsp
                <button type="button" class="btn btn-primary" onclick="window.open('newuser.php')" >Register</button>
            </form>
            </div>
            
            <!--<div class="col-md-6 login-right ">
            <h2>Register here</h2>
            <form action="Registration.php" method="post">
            <div class="form-group">
                <label>username</label>
                <input type="text" name="user" class="form-control" required>
                </div>
         <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
            </div>-->
        </div>
            </div>
        </div>
    </body>
</html>