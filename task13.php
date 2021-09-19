<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- example 13 -->
    <!-- Write a PHP script to :
    a) transform a string all uppercase letters.
    b) transform a string all lowercase letters.
    c) make a string's first character uppercase.
    d) make a string's first character of all the words uppercase. -->

    <div style="background-color: #5F9EA0; padding: 5px;">
       <h2>task 13</h2>
        <?php 
            $str  = "the quick brown FOX jumps over the Lazy dog.";
            echo "transform a string all uppercase letters: " ;
            print_r(strtoupper($str));
            echo '<br>' . 'transform a string all lowercase letters: ';
            print_r(strtolower($str));
            echo '<br>' . "make a string's first character uppercase: ";
            print_r(ucfirst($str));
            echo '<br>' . "make a string's first character of all the words uppercase: ";
            print_r(ucwords($str));
        ?>
    </div>
</body>
</html>