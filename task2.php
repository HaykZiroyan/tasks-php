    <!-- $color = ['white', 'green', 'red']
    Write a PHP script which will display the colors in the following way :
    Output :
    white, green, red,
    * green
    * red
    * white 
    -->

    <?php $color2 = ['white', 'green', 'red']; 
    echo( 
        '<ul>' . 
            '<li>'. $color2[1] . '</li>' . 
            '<li>'. $color2[2] . '</li>' . 
            '<li>'. $color2[0] . '</li>' . 
        '</ul>');
    ?>