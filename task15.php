<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- example 15 -->
    <!-- Write a PHP script to extract the file name from the following string. 
    Sample String : 'www.example.com/public_html/index.php'
    Expected Output : 'index.php' -->

    <div style="background-color: #D2691E; padding: 5px;">
       <h2>task 15</h2>
        <?php 
            $file = 'www.example.com/public_html/index.php';
            for ($i = 0; $i < strlen($file); $i++) {
                if ($file[$i] == '/') {
                   $num = $i;
                }
                
            }    
           for ($i = $num + 1; $i < strlen($file); $i++) {
               print($file[$i]);
           } 
        ?>
    </div>
</body>
</html>