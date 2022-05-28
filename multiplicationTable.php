<html>
 <head>
  <title>task2</title>
 </head>
 <body>

 <?php echo '<h2>multiplication table</h2>'; ?>

 <?php
    $cols = 10;
    $rows = 10;

    echo '<table border="2">';

    for ($tr = 1; $tr <= $rows; $tr++){
        echo '<tr>';
     for($td = 1; $td <= $cols; $td++){
        if($td % 2 == 0 or $tr % 2 == 0){
            echo '<td style="background : orange">'. $td * $tr .'</td>';
        } else {
            echo '<td>'. $td * $tr .'</td>';
        }
        
     }
     echo '</tr>';
    }
    echo '</table>';

    if($td % 2 == 0 or $tr % 2 == 0){
        $background = 'orange';
    }
    
?>


 </body>
</html>
