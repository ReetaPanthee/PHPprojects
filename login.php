
<body>
<form action="" method="post">
Username: <input type="text" name="username" required><br>
Password: <input type="text" name="password" required>
<br>
<input type="checkbox" id="remember" name="remember"> Remember Me 
<br><br>
<input type="submit" value="Go" name="loginform">
</form>
</body>

<?php
$cookie_lifetime = 30 * 24 * 60 * 60; // 30 days
$cookie_name = 'rememberme';
session_start();
function check_credentials($username, $password) {
    return ($username === 'Reeta' && $password === 'abc123');
}
if(isset($_POST['loginform'])){
  $username = $_POST['username'];
    $password = $_POST['password'];
    $remember = isset($_POST['remember']);
if(check_credentials($username, $password)){
    $_SESSION['user_name'] = $username;
    // Set a cookie if "Remember Me" is checked
        if ($remember) {
            setcookie($cookie_name, base64_encode($username . ':' . $password), time() + $cookie_lifetime, '/');
        }
    header('Location:welcome.php');
    exit;
    } else{
    echo "User invalid";
  } 
}else {
    // Check if the remember me cookie is set
    if (isset($_COOKIE[$cookie_name])) {
        list($username, $password) = explode(':', base64_decode($_COOKIE[$cookie_name]));
        if (check_credentials($username, $password)) {
            // Start session for authenticated user
            $_SESSION['user_name'] = $username;

            // Redirect to the welcome page
            header('Location: welcome.php');
            exit;
        }
    }
}

?>
