<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- example 9 -->
    <!-- Write a PHP script to calculate and display average temperature, five lowest and highest temperatures.
    Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
    Expected Output :
    Average Temperature is : 70.6 
    List of seven lowest temperatures : 60, 62, 63, 63, 64, 
    List of seven highest temperatures : 76, 78, 79, 81, 85, -->

    <?php 
    $temperatures = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73]; 
    $average = 0;
    ?>
    <div style="background-color: #0000FF; padding: 5px;">
        <h2>task 9</h2>
        <?php
        for ($i = 0; $i < count($temperatures); $i++) {
            $average = $average + $temperatures[$i];
        }
        $average = $average / count($temperatures);
        print("Average Temperature is:" . " " . $average);
        echo "<br>";


        sort($temperatures);
        $time = 0;
        echo "List of five lowest temperatures: ";
        for ($i = 0; $i < count($temperatures); $i++) {
            if ($temperatures[$i] != $temperatures[$i-1] & $time < 5) {
                echo($temperatures[$i] . " ");
                $time = $time + 1;
            }
            
        }
        echo "<br>";

        
        $time1 = 0;
        echo "List of seven highest temperatures: ";
        for ($i = count($temperatures)-1; $i>0; $i--) {
            if ($temperatures[$i] != $temperatures[$i+1] & $time1 < 5) {
                echo($temperatures[$i] . " ");
                $time1 = $time1 + 1;
            }
        }

        ?>
    </div>
</body>
</html>