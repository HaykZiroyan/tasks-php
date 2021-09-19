<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <!-- example 5 -->
     <!-- $color = [4 => 'white', 6 => 'green', 11=> 'red'];
    Write a PHP script to get the first element of the above array.
    Expected result : white -->

     <?php $color3 = [4 => 'white', 6 => 'green', 11=> 'red']; ?>
    <div style="background-color: #F0FFFF; padding: 5px;">
        <h2>task 5</h2>
        <?php
           echo($color3[4])
        ?>
    </div>
</body>
</html>