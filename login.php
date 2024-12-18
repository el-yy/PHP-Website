<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page - Website ni Lavandero</title>
    <link rel="stylesheet" href="all.css">
</head>
<?php include('nav.php');?>

<div class="register-content">
        <?php
        // Initialize error array
        $errors = array();
 
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            require('mysqli_connect.php');
 
            // Initialize variables
            $e = $p = '';
 
            if(empty($_POST['email'])){
                $errors[] = 'You forgot to enter your email address.';
            }else{
                $e = trim($_POST['email']);
            }
 
            if(empty($_POST['psword'])){
                $errors[] = 'You forgot to enter your password.';
            }else{
                $p = trim($_POST['psword']);
            }
 
            // Check if both email and password are set
            if($e && $p){
                $q = "SELECT user_id, fname, user_level, psword FROM users WHERE email='$e'";
                $result = @mysqli_query($dbc, $q);
 
                if(mysqli_num_rows($result) == 1){
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    if(password_verify($p, $row['psword'])) {
                        session_start();
                        $_SESSION['user_id'] = $row['user_id'];
                        $_SESSION['fname'] = $row['fname'];
                        $_SESSION['user_level'] = (int)$row['user_level'];
 
                        $url = ($_SESSION['user_level'] === 1) ? 'admin_page.php' : 'member_page.php';
                        header("Location: $url");
                        mysqli_free_result($result);
                        mysqli_close($dbc);
                        exit();
                    } else {
                        $errors[] = 'The email address and password combination does not match our records.';
                    }
                } else {
                    $errors[] = 'The email address and password combination does not match our records.';
                }
            }
            mysqli_close($dbc);
        }
 
        // Display any errors at the top
        if (!empty($errors)) {
            echo '<div class="error">';
            echo '<h3>The following errors occurred:</h3>';
            echo '<ul>';
            foreach ($errors as $error) {
                echo "<li>$error</li>";
            }
            echo '</ul>';
            echo '</div>';
        }
        ?>
<!--form-->
<div class="login-page">
    <h2>Login</h2>
    <form action="login.php" method="post">
        <p>
                <label class="label" for="email">Email Address:</label>
                <input type="email" id="email" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']?>">
        </p>

        <p>
            <label class="label" for="psword">Password: &nbsp;</label>
            <input type="password" id="psword" name="psword" size="20" maxlength="40">
        </p>

        <p><input type="submit" id="submit" name="submit" value="Login"></p>
    </form>
    <a href="#">Forgot Password?</a>
    <a >or</a>
    <a href="register-page.php">Create new account</a>
</div>
    <?php include('footer.php');?>
</body>
</html>