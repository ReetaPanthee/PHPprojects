<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
  $name=$age="";
  $success_message="";
  $errors=[];
  $name=$_POST['name'];
  $age= $_POST['age'];
  if(empty($name)){
    $errors['name_error']="Name field is required!";
  }
  if(empty($age)){
    $errors['age_limit_error']="Age field is required";
  }
  if((int)$age<0 || (int)$age>150){
    $errors['age_limit_error']='Age must be between 0 to 150';
  }
  if(!isset($errors)){
    $success_message= "Form is valid";
  }
}
?>
<style>
.error{
  color:red;
  }
  </style>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method = "post">
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
  if(!empty($_success_message)){
    echo $success_message;
  }
}
?>
Name: <input type= "text" name="name">
<span class= "error">
<?php
if(isset($errors['name_error'])) echo $errors['name_error'];?>
</span><br><br>
Age: <input type="text" name="age">
<span class="error">
<?php
if(isset($errors['age_empty_error']))
echo $errors['age_empty_error'];
if(isset($errors['age_limit_error']))
echo $errors['age_limit_error'];
?>
</span><br><br>
<input type="submit" value="ok">
</form>