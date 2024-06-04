<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="../css/user_style.css">
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="login-form bg-white p-4 mt-5">
                    <h3 class="text-center mb-4">SkinBliss</h3>
                    <hr>
                    <form action="user_login_getter.php" method="POST">
                        <!-- USERNAME -->
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" id="username" placeholder="Type your username" name="username" required>
                        </div>
                        <br>

                        <!-- PASSWORD -->
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" placeholder="Type your password" name="password" required>
                        </div>

                        <!-- FORGOT PASSWORD and LOG IN -->
                        <div class="form-group text-right">
                            <a href="#" class="text-decoration-none">Forgot password?</a>
                        </div>
                        <br>

                        <div class="form-group">
                            <input type="submit" value="Login">
                        </div>

                        <!--  -->
                        <div class="text-center mt-3">
                            <p>Log in Using</p>
                            <div class="social-buttons">
                                <a href="#" class="btn btn-secondary"><i class="fa-brands fa-google" style="color: #fff;"></i></a>
                                <a href="#" class="btn btn-secondary"><i class="fa-brands fa-facebook-f" style="color: #fff;"></i></a>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <p>Or Sign Up Using</p>
                            <a href="#" class="text-decoration-none">Sign up now</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
<!-- BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>