<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- example 12 -->
    <!-- Write a PHP function to change the following array's all values to upper or lower case. 
    Sample arrays :
    $Color = ['A' => 'Blue', 'B' => 'Green', 'c' => 'Red'];
    Expected Output :
    Values are in lower case.
    Array ( [A] => blue [B] => green [c] => red ) 
    Values are in upper case.
    Array ( [A] => BLUE [B] => GREEN [c] => RED ) -->


    <div style="background-color: #DEB887; padding: 5px;">
       <h2>task 12</h2>
        <?php 
            $Color = ['A' => 'Blue', 'B' => 'Green', 'c' => 'Red'];
            echo ('Values are in lower case.' . '<br>');
            print_r(array_map('strtolower', $Color));
            echo '<br>';
            echo ('Values are in upper case.' . '<br>');
            print_r(array_map('strtoupper', $Color));

        ?>
    </div>
</body>
</html>