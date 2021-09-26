    <!-- Write a PHP script to extract the file name from the following string. 
    Sample String : 'www.example.com/public_html/index.php'
    Expected Output : 'index.php' -->

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