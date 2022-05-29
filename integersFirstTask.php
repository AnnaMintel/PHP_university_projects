<html>
 <head>
  <title>task1</title>
 </head>
 <body>

 <?php echo '<h2>Find 10 first integers and print it in table </h2>'; ?>

<?php
$arr = [];
$x = 0;

for ($i = 2; $x < 10; $i++) {
    $flag = 1;
    if ($i > 2 && $i % 2 != 0) {
        for ($j = 3; $j * $j <= $i; $j = $j + 2) {
            if ($i % $j == 0) {
                $flag = 0;
                break;
            }
        }
    } else if ($i != 2) $flag = 0;
    if ($flag == 1) {
        $arr[] = $i;
        $x++;
    }
}               


$rows = 10; 
$cols = 2; 

echo '<table border="1">';

foreach ($arr as $key => $value) {
    echo '<tr>';
    echo '<td>'. $key + 1 .'</td>';
    echo '<td>'. $value .'</td>';
    echo '</tr>';
}

echo '</table>';

?>


 </body>
</html>
