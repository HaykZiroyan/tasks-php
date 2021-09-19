<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- example 4 -->
    <!-- $x = [1, 2, 3, 4, 5];
    Delete an element from the above PHP array. After deleting the element, integer keys must be normalized.
    Sample Output :
    array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) } 
    array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5) } -->

    <?php $x = [1, 2, 3, 4, 5]; ?>
    <div style="background-color: #7FFFD4; padding: 5px;">
        <h2>task 4</h2>
        <?php
            print_r($x);
            echo "<br>";
            $a = 3;
            unset($x[$a]);
            for ($i = $a; $i < 5; $i++) {
                $x[$i] = $x[$i + 1];
            }
            unset($x[4]);
            print_r($x);
        ?>
    </div>

</body>
</html>