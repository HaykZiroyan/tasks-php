
    <!-- Write a PHP script to check whether a string contains a specific string? 
    Sample string : 'The quick brown fox jumps over the lazy dog.' -->

    <?php 
        $word = "fox";
        $mystring = "The quick brown fox jumps over the lazy dog";
         
        if(strpos($mystring, $word) !== false){
            echo "Word Found!";
        } else{
            echo "Word Not Found!";
        }
    ?>
    