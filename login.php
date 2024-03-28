<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Responsive</title>

    <!-- Eksternal CSS -->
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    <div class="container">
        <div class="login">
            <div class="left-konten">
                <img src="assets/img/logo.png" alt="logo">
            </div>
            <div class="right-konten">

                <h1> Login </h1>
                <hr>
                
                <form action="" id="login">
                    <label for="username"> Username </label> <br>
                    <input type="text" name="username" id="username" placeholder="Username"> <br> <br>

                    <label for="password"> Password </label> <br>
                    <input type="password" name="password" id="password" placeholder="Password"> <br> <br>

                    <div class="remember-me">
                        <input type="checkbox" name="" id="remember-me"> 
                        <label for="remember-me"> remember me </label>
                    </div> <br> <br>

                    <div class="button">
                        <input type="submit" value="login" class="button-login">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>