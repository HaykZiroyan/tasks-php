<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- example 8 -->
    <!-- Write a PHP script to sort the following associative array : 
    ["Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"] in
    a) ascending order sort by value
    b) ascending order sort by Key
    c) descending order sorting by Value
    d) descending order sorting by Key -->

    <?php $array = ["Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"] ?>
    <div style="background-color: #FFEBCD; padding: 5px;">
        <h2>task 8</h2>
        <h4>ascending order sort by value</h4>
        <?php
            asort($array);
            foreach($array as $x => $x_value) {
                echo  $x . " " . $x_value . " " . " ";
              }
        ?>
        <h4>ascending order sort by Key</h4>
        <?php
            ksort($array);
            foreach($array as $x => $x_value) {
                echo  $x . " " . $x_value . " " . " ";
              }
        ?>
        <h4>descending order sorting by Value</h4>
        <?php
        arsort($array);
            foreach($array as $x => $x_value) {
                echo  $x . " " . $x_value . " " . " ";
              }
        ?>
        <h4>descending order sorting by Key</h4>
        <?php
        krsort($array);
            foreach($array as $x => $x_value) {
                echo  $x . " " . $x_value . " " . " ";
              }
        ?>
    </div>
</body>
</html>