    <!-- Write a PHP script to :
    a) transform a string all uppercase letters.
    b) transform a string all lowercase letters.
    c) make a string's first character uppercase.
    d) make a string's first character of all the words uppercase. -->

    <?php 
        $str  = "the quick brown FOX jumps over the Lazy dog.";
        echo "transform a string all uppercase letters: " ;
        print_r(strtoupper($str));
        echo '<br>' . 'transform a string all lowercase letters: ';
        print_r(strtolower($str));
        echo '<br>' . "make a string's first character uppercase: ";
        print_r(ucfirst($str));
        echo '<br>' . "make a string's first character of all the words uppercase: ";
        print_r(ucwords($str));
    ?>