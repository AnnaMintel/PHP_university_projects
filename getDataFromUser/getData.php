<html>
 <head>
  <title>Form</title> 
 </head>
 <body>

 <?php echo '<h2>Enter your data: </h2>'; ?>

 <?php

 echo '<form method="post" action="getData.php">
      <p> User Name: <BR> <input type="text" name="name" > </p>
      <p> E-mail: <BR> <input type="text" name="email"> </p>
      <p> Message: <BR> <input type="text" name="message"> </p>
      <button type="submit">SEND</button>
    </form>';  

if (isset($_POST)) {
    print("Name: " . $_POST['name']);
    print("<br>Email: " . $_POST['email']);
    print("<br>Message: " . $_POST['message']);
}

$name = 'name: ';
$email = 'email: ';
$message = 'message: ';

$filename = 'data.txt';
$text = $name.$_POST['name']."\n".$email.$_POST['email']."\n".$message.$_POST['message'];
file_put_contents($filename, $text);

$text = file_get_contents($filename);

?>

 </body>
</html>

