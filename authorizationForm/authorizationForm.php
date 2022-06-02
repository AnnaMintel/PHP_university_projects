<html>
 <head>
  <title>Form</title> 
 </head>
 <body>

 <?php echo '<h2>Authorization form with validation</h2>'; ?>

 <?php
 
 require 'users.php';

   echo '<form>
      <p> User Name: <input type="text" name="name"> </p>
      <p> Password: <input type="pass" name="pass"> </p>
      <p><input type="submit" onclick= "validation()";/></p>
    </form>'; 

$name = $_POST['name'];
$pass = $_POST['pass'];

function validation () {
    if (($name === $user1 && $pass === $pass1) ||
       ($name === $user2 && $pass === $pass2) ||
       ($name === $user3 && $pass === $pass3)) {
        echo 'alert("Login sucessfull")';
    }else{
        echo 'alert("Access denied!!!!!")';
    } 
    }

?>

 </body>
</html>
