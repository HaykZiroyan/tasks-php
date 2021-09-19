<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- example 1 -->
    <!-- $color = ['white', 'green', 'red', 'blue', 'black'];
    Write a script which will display the following string 
    "The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
    and the words 'red', 'green' and 'white' will come from $color. -->

    <?php $color = ['white', 'green', 'red', 'blue', 'black']; ?>
    <div style="background-color: #F0F8FF; padding: 5px;">
        <h2>task 1</h2>
        <p>The memory of that scene for me is like a frame of film forever frozen at that moment: the <?php print_r($color[2]);?> carpet, the <?php print_r($color[1]);?> lawn, the <?php print_r($color[0]);?> house, the leaden sky. The new president and his first lady. - Richard M. Nixon</p>
    </div>
    
</body>
</html>