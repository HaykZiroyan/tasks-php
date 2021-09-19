<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- example 14 -->
    <!-- Write a PHP script to check whether a string contains a specific string? 
    Sample string : 'The quick brown fox jumps over the lazy dog.' -->

    <div style="background-color: #7FFF00; padding: 5px;">
       <h2>task 14</h2>
        <?php 
            $word = "fox";
            $mystring = "The quick brown fox jumps over the lazy dog";
             
            if(strpos($mystring, $word) !== false){
                echo "Word Found!";
            } else{
                echo "Word Not Found!";
            }
        ?>
    </div>
</body>
</html>