<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../bootstrap-4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Signup.css">
    <title>Shopx|Sign up</title>
</head>
<body background="../Images/back2.jpg">
<img src="../Images/Logo.png" alt="Logo" class="imagepos">
<div class="row">
    <div class="signup-form description">
        <h1>Welcome to Shopx please signup to continue</h1>
    </div>
<div class="signup-form">
    <form action="#" method="post">
        <h2>Create Account</h2>
        <p class="lead">It's free and hardly takes more than 30 seconds.</p>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="username" placeholder="Username" required="required">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
                <input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="text" class="form-control" name="password" placeholder="Password" required="required">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-lock"></i>
					<i class="fa fa-check"></i>
				</span>
                <input type="text" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-lg">Sign Up</button>
        </div>
        <p class="small text-center">By clicking the Sign Up button, you agree to our <br><a href="#">Terms &amp; Conditions</a>, and <a href="#">Privacy Policy</a>.</p>
    </form>
    <div class="text-center">Already have an account? <a href="#">Login here</a>.</div>
</div>

</div>
</body>
</html>