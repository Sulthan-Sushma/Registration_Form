<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container d-flex align-items-center justify-content-center">
        <div class="card card-signin-card">
            <div class="card-header">
                <h3 class="text-center">Sign In</h3>
            </div>
            <div class="card-body">
                <form action="connect.php" method="POST">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Enter your Username" required autocomplete="off" name="username">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon2"><i class="fa fa-key"></i></span>
                        <input type="password" class="form-control" placeholder="Enter your Password" required autocomplete="off" name="password">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="signin" value="Sign in" class="btn registration_btn">
                    </div>
                </form>
            </div>
            <div class="card-footer text-center text-light signup">
                Don't have an account? <a href="signup.php">Sign Up</a>
            </div>
        </div>
    </div>
</body>
</html>


