<head>
    <?php include"connect.php"?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login & Registration Form</title>
    <!---Custom CSS File--->
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
        font-family: 'Times New Roman', serif;
    }
</style>

<body>
    <div class="container">
        <input type="checkbox" id="check">
        <div class="login form">
            <img src="india.jpg" width="400" height="128">
            <header>Login</header>
            <form action="process.php">
                <input type="text" placeholder=" Enter your Username">
                <input type="moblienumber" placeholder="Enter your number">
                <input type="pass" placeholder="Enter your password">
                <a href="#">Forgot password?</a>
                <input type="button" class="button" value="Login">
            </form>
            <div class="signup">
                <span class="signup">Don't have an account?

         <label for="check">Register now</label>
        </span>
            </div>
        </div>
        <div class="registration form">
            <header>Register now</header>
            <form action="process.php" method="post">
                <input type="text" placeholder="Enter Username" name="name">
                <input type="number" placeholder="Enter your number" name="number">
                <input type="text" placeholder="Enter your email" name="email">
                <input type="password" placeholder="Create a password">
                <input type="password" placeholder="Confirm your password" name="password">
                <input type="button" class="button" value="Register">
            </form>
            <div class="signup">
                <span class="signup">Already have an account?
         <label for="check">Login</label>
        </span>
            </div>
        </div>
    </div>
</body>

</html>