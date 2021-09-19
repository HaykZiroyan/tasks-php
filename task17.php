<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Write a PHP script to get the last three characters of a string. 
Sample String : 'rayy@example.com'
Expected Output : 'com' -->
    <!-- example 17 -->

    <div style="background-color: #6495ED; padding: 5px;">
       <h2>task 17</h2>
       <?php 
            $file2 = 'rayy@example.com';
            for ($i = 0; $i < strlen($file2); $i++) {
                if ($file2[$i] == '.') {
                   $num = $i;
                }
                
            }    
           for ($i = $num + 1; $i < strlen($file2); $i++) {
               print($file2[$i]);
           } 
        ?>
    </div>
</body>
</html>