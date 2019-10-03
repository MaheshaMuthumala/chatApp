/**
 * Created by PhpStorm.
 * User: Maheshi
 * Date: 6/20/2019
 * Time: 4:29 PM
 */
/**
* Created by PhpStorm.
* User: Maheshi
* Date: 4/20/2019
* Time: 10:13 PM
*/
<html>
<head>
    <title>Create a account</title>
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
    <link rel="stylesheet" type="text/css" href="css/signup.css">
</head>

<body>
<div class="Register-form">
    <form action="" method="post">
        <div class="form-header">
            <h2>Register</h2>
            <p>Fill out this form and chat with your friends</p>
        </div>
        <div class="form-group">
            <label>Userid</label>
            <input type="text" class="form-control" name="user_id" placeholder="userid" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="user_pass" placeholder="Password" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="user_email" placeholder="someone@site.com" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label>Country</label>
            <select class="form-control" name="user_country" required>
                <option disabled="">Select a country</option>
                <option>Afghanistana</option>
                <option>Albania</option>
                <option>Algeria</option>
                <option>Andorra</option>
                <option>Angola</option>
                <option>Bahamas</option>
                <option>Bahrain</option>
                <option>Belgium</option>
                <option> Brazil</option>
                <option>Canada</option>
                <option>Chile</option>
                <option> China</option>
                <option>Democratic Republic of the Congo</option>
                <option>Denmark</option>
                <option>Dominican Republic</option>
                <option>Ecuador</option>
                <option>Egypt</option>
                <option>El Salvador</option>
                <option>Ethiopia</option>
                <option>Fiji</option>
                <option>Finland</option>
                <option>France</option>
                <option>Gabon</option>
                <option>Gambia</option>
                <option>Georgia</option>
                <option>Germany</option>
                <option>Haiti</option>
                <option>Honduras</option>
                <option>Hungary</option>
                <option>Iceland</option>
                <option>India</option>
                <option>Indonesia</option>
                <option>Iraq</option>
                <option>Ireland</option>
                <option>Jamaica</option>
                <option>Kazakhstan</option>
                <option>Lebanon</option>
                <option>Macedonia</option>
                <option>Namibia</option>
                <option>Oman</option>
                <option>Qatar</option>
                <option>Romania</option>
                <option>Saint Kitts and Nevis</option>
                <option>Tajikistan</option>
                <option>Ukraine</option>
                <option>Vanuatu</option>
                <option>Yemen</option>
                <option>Zambia</option>
                <option>Pakistan</option>
           </select>
        </div>
        <div class="form-group">
            <label>Gender</label>
            <select class="form-control" name="user_gender" required>
                <option disabled="">Select your gender</option>
                <option>Male</option>
                <option>Female</option>
                <option>Others</option>
            </select>
        </div>
        <div class="form-group">
            <label class="checkbox-inline">
                <input type="checkbox" required>
                I accept the <a href="#">Terms of use</a> &amp; <a href="#">privacy policy</a>
            </label>
        </div>

        <div class="form-group">
            <button type="submit" name="sign_up" class="btn btn-primary btn-block btn-lg">Sign Up</button>
        </div>

        <?php include ("signup_user.php") ?>
    </form>
    <div class="text-center small" style="color: #ddeeee;">
        Already have an account? <a href="signin.php" style="color: #00cb82">Signin here</a>
    </div>
</div>

</body>
</html>
