<!-- Write a PHP script to get the last three characters of a string. 
Sample String : 'rayy@example.com'
Expected Output : 'com' -->
   
   <?php 
        $file2 = 'rayy@example.com';
        for ($i = 0; $i < strlen($file2); $i++) {
            if ($file2[$i] == '.') {
                $num = $i;
            }
            
        }    
        for ($i = $num + 1; $i < strlen($file2); $i++) {
            print($file2[$i]);
        } 
    ?>