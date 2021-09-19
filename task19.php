<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- example 19 -->
    <!-- Write a PHP script to find the first character that is different between two strings.
    String1 : 'football'
    String2 : 'footboll'
    Expected Result : First difference between two strings at position 5: "a" vs "o" -->
    <div style="background-color: #DC143C; padding: 5px;">
       <h2>task 19</h2>
        <?php 
            $String1 = 'football';
            $String2 = 'footboll';
            for ($i = 0; $i <= strlen($String1); $i++) {
                if ($String1[$i] != $String2[$i]) {
                    echo("First difference between two strings at position " . $i . ": " . $String1[$i] . " vs " . $String2[$i] );
                }
            }
            
        ?>
    </div>
</body>
</html>