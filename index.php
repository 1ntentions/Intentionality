<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <form action="login_backend.php" method="post">
            <h1>Welcome to Intentionality! Please login.</h1>
            <?php if(isset($_GET['error'])){ ?>
                <p class="error"> <?php echo $_GET['error']; ?></p>
            <?php } ?>
            <label>Username</label>
            <input type="text" name="username" placeholder="Username"><br>
            <label>Password</label>
            <input type="password" name="password" placeholder="Password"><br>

            <button type="submit" name="login">Login</button>
            <a href="signup.php">Sign up</a>
        </form>
    </body>
</html>
