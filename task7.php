    <!-- Write a PHP script that inserts a new item in an array in any position. 
    Expected Output :
    Original array : 
    1 2 3 4 5 
    After inserting '$' the array is :
    1 2 3 $ 4 5 -->
    <!-- example 7 -->
    <?php $y = [1, 2, 3, 4, 5]; 
        $place = 4;
        $item = "i";
        for ($i = 0; $i < count($y); $i++) {
            print($y[$i]);
            print(" ");
        }
        for ($i = count($y); $i >= $place; $i--) {
            $y[$i+1] = $y[$i];   
        }
        $y[$place] = $item;
        echo "<br>";

        for ($i = 0; $i < count($y); $i++) {
            print($y[$i]);
            print(" ");
        }
        ?>