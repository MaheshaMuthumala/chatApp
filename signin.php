/**
 * Created by PhpStorm.
 * User: Maheshi
 * Date: 4/20/2019
 * Time: 10:13 PM
 */
<html>
<head>
    <title>Login to your account</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/signin.css">
</head>

<body>
<div class="signin-form">
    <form action="" method="post">
        <div class="form-header">
            <h2>Sign In</h2>
            <p>Login to My Chat</p>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="someone@site.com" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="pass" placeholder="Password" autocomplete="off" required>
        </div>
        <div class="small">Forgot password? <a href="forgot_pass.php">Click here</a></div><br>
        <div class="form-group">
            <button type="submit" name="sign_in" class="btn btn-primary btn-block btn-lg">Sign In</button>
        </div>

        <!-- <?php //include(signin_user.php) ?> -->
    </form>
    <div class="text-center small" style="color: #67428B;">Don't have an account? <a href="signup.php">Create one</a></div>
</div>

</body>
</html>