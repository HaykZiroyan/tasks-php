    <!-- Write a PHP script to extract the user name from the following email ID.
    Sample String : 'rayy@example.com'
    Expected Output : 'rayy' -->

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