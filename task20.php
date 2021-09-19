<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- example 20 -->
    <!-- Write a PHP script to remove comma(s) from the following numeric string.
    Sample String : '2,543.12'
    Expected Output : 2543.12 -->

    <div style="background-color: #00FFFF; padding: 5px;">
       <h2>task 20</h2>
        <?php 
            $numstr = '2,543.12';
            echo str_replace(",","",$numstr); 
        ?>
    </div>
</body>
</html>