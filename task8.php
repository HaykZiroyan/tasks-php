    <!-- Write a PHP script to sort the following associative array : 
    ["Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"] in
    a) ascending order sort by value
    b) ascending order sort by Key
    c) descending order sorting by Value
    d) descending order sorting by Key -->

    <?php $array = ["Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"]; 
            echo('ascending order sort by value' . '<br>');
            asort($array);
            foreach($array as $x => $x_value) {
                echo  $x . " " . $x_value . " " . " ";
              }
      
        echo('<br>' . 'ascending order sort by Key' . '<br>');
            ksort($array);
            foreach($array as $x => $x_value) {
                echo  $x . " " . $x_value . " " . " ";
              }
       echo('<br>' . "descending order sorting by Value" . '<br>');
        arsort($array);
            foreach($array as $x => $x_value) {
                echo  $x . " " . $x_value . " " . " ";
              }
        echo('<br>' . 'escending order sorting by Key' . '<br>');
        krsort($array);
            foreach($array as $x => $x_value) {
                echo  $x . " " . $x_value . " " . " ";
              }
        ?>
    