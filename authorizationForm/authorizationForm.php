<html>
 <head>
  <title>Form</title> 
 </head>
 <body>

 <?php echo '<h2>Authorization form with validation</h2>'; ?>

 <?php

 echo '<form method="post" action="authorizationForm.php">
      <p> User Name: <input type="text" name="name" > </p>
      <p> Password: <input type="pass" name="pass"> </p>
      <input type="submit"></input>
    </form>';  

 require 'users.php';

$name = htmlspecialchars($_POST['name']);
$pass = htmlspecialchars($_POST['pass']);
  
    if ($name === $user1 && $pass === $pass1) {
        echo ("Hello USER1! Login sucessfull");
    } else if ($name === $user2 && $pass === $pass2) {
        echo ("Hello USER2! Login sucessfull");
    } else if ($name === $user3 && $pass === $pass3) {
        echo ("Hello USER3! Login sucessfull");
    } else{
        echo ("Hello USER! Access denied! Enter correct data") ;
    }    
    
?>

 </body>
</html>
