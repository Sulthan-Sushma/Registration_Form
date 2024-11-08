<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container d-flex align-items-center justify-content-center">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Sign Up</h3>
            </div>
            <div class="card-body">
                <form action="connect.php" method="POST">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Enter your Username" required autocomplete="off" name="username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon2"><i class="fa fa-key" aria-hidden="true"></i></span>
                        <input type="password" class="form-control" placeholder="Enter your Password" required autocomplete="off" name="password" aria-label="Password" aria-describedby="basic-addon2">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3"><i class="fa fa-lock" aria-hidden="true"></i></span>
                        <input type="password" class="form-control" placeholder="Confirm Password" required autocomplete="off" name="confirm_password" aria-label="Confirm Password" aria-describedby="basic-addon3">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="register" value="Sign up" class="btn signup_btn">
                    </div>
                </form>
            </div>
            <div class="card-footer text-center text-light signup">
                Already have an account? <a href="signin.php">Sign In</a>
            </div>
        </div>
    </div>
</body>
</html>

