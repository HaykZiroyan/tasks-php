    <!-- Write a PHP function to change the following array's all values to upper or lower case. 
    Sample arrays :
    $Color = ['A' => 'Blue', 'B' => 'Green', 'c' => 'Red'];
    Expected Output :
    Values are in lower case.
    Array ( [A] => blue [B] => green [c] => red ) 
    Values are in upper case.
    Array ( [A] => BLUE [B] => GREEN [c] => RED ) -->

    <?php 
        $Color = ['A' => 'Blue', 'B' => 'Green', 'c' => 'Red'];
        echo ('Values are in lower case.' . '<br>');
        print_r(array_map('strtolower', $Color));
        echo '<br>';
        echo ('Values are in upper case.' . '<br>');
        print_r(array_map('strtoupper', $Color));
    ?>