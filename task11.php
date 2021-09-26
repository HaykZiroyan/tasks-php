    <!-- example 11 -->
    <!-- Write a PHP program to merge (by index) the following two arrays.
    Sample arrays :
    $array1 = [array[77, 87], [23, 45]];
    $array2 = ["w3resource", "com"];
    Expected Output :
    Array  
    (      
    [0] => Array          
    (              
    [0] => w3resource              
    [1] => 77              
    [2] => 87          
    )        
    [1] => Array          
    (              
    [0] => com              
    [1] => 23              
    [2] => 45          
    )    
    ) -->

    <?php 
    $array1 = [[77, 87], [23, 45]];
    $array2 = ["w3resource", "com"];
    for ($i = 0; $i < 2; $i++) {
        for ($j = 1; $j >= 0; $j--) {
            $array1[$i][$j+1] = $array1[$i][$j];
        }
        $array1[$i][0] = $array2[$i];
    }
    print_r($array1);
    ?>