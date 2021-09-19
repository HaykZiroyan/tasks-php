<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- example 18 -->
    <!-- Write a PHP script to replace the first 'the' of the following string with 'That'.
    Sample date : 'the quick brown fox jumps over the lazy dog.'
    Expected Result : That quick brown fox jumps over the lazy dog. -->
    <div style="background-color: #FFF8DC; padding: 5px;">
       <h2>task 18</h2>
        <?php 
            $text = 'the quick brown fox jumps over the lazy dog.';
            echo preg_replace('/' . 'the' . '/', 'that', $text, 1);
            // print_r($text);
        ?>
    </div>
</body>
</html>