<html>
 <head>
  <title>Тестируем PHP !</title>
 </head>
 <body>
 <?php echo '<p>Привет, мир!</p>'; ?>

<!-- console log -->
<?php
function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .');';
    if ($with_script_tags) {$js_code = '<script>' . $js_code . '</script>'; }
    echo $js_code; } ?> 
console_log();

 </body>
</html>
