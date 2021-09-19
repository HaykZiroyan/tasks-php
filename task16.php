<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <!-- example 16 -->
     <!-- Write a PHP script to extract the user name from the following email ID.
    Sample String : 'rayy@example.com'
    Expected Output : 'rayy' -->

     <div style="background-color: #FF7F50; padding: 5px;">
       <h2>task 16</h2>
        <?php 
            $file1 = 'rayy@example.com';
            for ($i = 0; $i < strlen($file1); $i++) {
                if ($file1[$i] == '@') {
                   $num = $i;
                }
                
            }    
           for ($i = 0; $i < $num; $i++) {
               print($file1[$i]);
           } 
        ?>
    
    </div>
</body>
</html>