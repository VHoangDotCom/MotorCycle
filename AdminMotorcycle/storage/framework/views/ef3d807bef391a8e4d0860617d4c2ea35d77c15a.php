<?php
//Initialize the session
session_start();

//check if the user is already logged im. if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: home.blade.php");
    exit;
}

//Include config file
require_once "config.php";

//define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";

//processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    //check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    }else{
        $username = trim($_POST["username"]);
    }

//check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }

//validate credentials
    if(empty($username_err) && empty($password_err)){
        //prepare a select statement
        $sql = "SELECT id, username, password FROM admins WHERE username = ?";

        if($stmt = $mysqli->prepare($sql)){
            //bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_username);

            //set parameters
            $param_username = $username;

            //attempt to execute the prepared statement
            if($stmt->execute()){
                //store result
                $stmt->store_result();

                //check if username exists, if yes then verify password
                if($stmt->num_rows == 1){
                    //bind result variables
                    $stmt->bind_result($id, $username, $hashed_password);
                    if($stmt->fetch()){
                        if(password_verify($password, $hashed_password)){
                            //password is correct, so start a new session
                            session_start();

                            //store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

                            //redirect user to welcome page
                            header("location: home.blade.php");
                        } else{
                            //password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                }else{
                    //username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            }else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            //Close statement
            $stmt->close();
        }
    }

//close connectionn
    $mysqli->close();
}
?>

<div class="wrapper">
    <?php
    if(!empty($login_err)){
        echo '<div class="alert alert-danger">' . $login_err . '</div>';
    }
    ?>


    <form style="width: 380px;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
        <h1 class="a11y-hidden">Login Form</h1>

        <div class="form-group">
            <label class="label-email">
                <span class="required" style="font-size: 16px; margin-left: 4px;">Username or Email</span>
                <input type="text" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" name="username" placeholder="Email or Username" tabindex="1"  value="<?php echo $username; ?>" />
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </label>
        </div>
        <input  type="checkbox" name="show-password" class="show-password a11y-hidden" id="show-password" tabindex="3" />
        <label style="margin-top: -105px;" class="label-show-password" for="show-password">
            <span>Show Password</span>
        </label>
        <div style="margin-top: -20px;" class="form-group" >
            <label class="label-password">
                <span class="required" style="font-size: 16px; margin-left: 4px;">Password</span>
                <input type="text" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" name="password" placeholder="Password" tabindex="2" />
                <span class="required invalid-feedback"><?php echo $password_err; ?></span>
            </label>
        </div>

        <div style="margin-top: 20px;text-align: center;" class="form-group">
            <input type="submit" value="Log In" style="border-radius: 12px;" />
        </div>

        <div style="margin-top: 80px;; ; " class="email">
            <a style="font-size: 16px;" href="reset-password.php">Forgot password?</a>
            <p style="color:black; font-size: 14px;margin-top: 12px;" >Don't have an account? <a style="font-size: 16px;" href="register.php">Sign up now</a>.</p>
        </div>
        <figure aria-hidden="true">
            <div class="person-body"></div>
            <div class="neck skin"></div>
            <div class="head skin">
                <div class="eyes"></div>
                <div class="mouth"></div>
            </div>
            <div class="hair"></div>
            <div class="ears"></div>
            <div class="shirt-1"></div>
            <div class="shirt-2"></div>
        </figure>


    </form>

</div>


</body>
</html>
<?php /**PATH D:\epc\xampp\htdocs\AdminMotorcycle\resources\views/login/login.blade.php ENDPATH**/ ?>