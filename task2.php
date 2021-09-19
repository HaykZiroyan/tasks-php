<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <!-- example 2 -->
    <!-- $color = ['white', 'green', 'red']
    Write a PHP script which will display the colors in the following way :
    Output :
    white, green, red,
    * green
    * red
    * white 
    -->

     <?php $color2 = ['white', 'green', 'red']; ?>
    <div style="background-color: #FAEBD7; padding: 5px;">
        <h2>task 2</h2>
        <ul>
            <li><?php print($color2[1]) ?></li>
            <li><?php print($color2[2]) ?></li>
            <li><?php print($color2[0]) ?></li>
        </ul>
    </div>
</body>
</html>