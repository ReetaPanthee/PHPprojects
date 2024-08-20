<form method="POST">
Name: <input type= "text" name="name"> <br>
Username: <input type= "text" name="username"> <br>
Age: <input type="text" name="age"> <br>
Password: <input type= "text" name="password"> <br>
Confirm_password: <input type= "text" name="confirm_password"><br>
<input type="submit" value="submit">
</form>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
  $name=$username = $age=$password=$confirm_password="";
  $success_message="";
  $errors=[];
  $name=$_POST['name'];
  $username=$_POST['username'];
  $age= $_POST['age'];
  $password = $_POST['password'];
  $confirm_password=$_POST['confirm_password'];
  if(empty($name)){
    $errors['name_empty_error']="Name field is required!";
  }
  if(empty($username)){
    $errors['username_empty_error']="Username field is required!";
  }
  if(empty($age)){
    $errors['age_empty_error']="Age field is required";
  }
  if(empty($password)){
    $errors['password_empty_error']="Password field is required";
  }
   if(empty($confirm_password)){
    $errors['confirm_password_empty_error']="Confirm Password field is required";
  }
  if (!preg_match("/^[a-zA-Z]+$/", $name)) {
            $errors['name_format_error'] = "Name cannot have numbers and special characters.";
        }

    if (!preg_match("/^[a-zA-Z][a-zA-Z0-9]{7,}$/", $username)) {
            $errors['username_format_error'] = "Password must begin with an alphabet,and  be at least 8 characters long.";
        }
  if((int)$age<16){
    $errors['age_limit_error']='Age cannot be less than 16 years';
  }
  if($password != $confirm_password){
    $errors['password_notsame_error']='Password and Confirm_Password must match';
  }
  if(!isset($errors)){
    $success_message= "Form is valid";
  }
if (isset($errors['name_empty_error'])) {
        echo $errors['name_empty_error'] . "<br>";
    }
    if (isset($errors['username_empty_error'])) {
        echo $errors['username_empty_error'] . "<br>";
    }
if (isset($errors['age_empty_error'])) {
        echo $errors['age_empty_error'] . "<br>";
    }
    if (isset($errors['password_empty_error'])) {
        echo $errors['password_empty_error'] . "<br>";
    }
    if (isset($errors['confirm_password_empty_error'])) {
        echo $errors['confirm_password_empty_error'] . "<br>";
    }
    if (isset($errors['name_format_error'])) {
        echo $errors['name_format_error'] . "<br>";
    }
    if (isset($errors['username_format_error'])) {
        echo $errors['username_format_error'] . "<br>";
    }
     if (isset($errors['age_limit_error'])) {
        echo $errors['age_limit_error'] . "<br>";
    }
     if (isset($errors['password_notsame_error'])) {
        echo $errors['password_notsame_error'] . "<br>";
    }
  }

?>