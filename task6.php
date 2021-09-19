<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- example 6 -->

    <!-- Write a PHP script which decodes the following JSON string.
    Sample JSON code :
    {"Title": "The Cuckoos Calling",
    "Author": "Robert Galbraith",
    "Detail": {
    "Publisher": "Little Brown"
    }}
    Expected Output :
    Title : The Cuckoos Calling
    Author : Robert Galbraith
    Publisher : Little Brown -->


    <div style="background-color: #F5F5DC; padding: 5px;">
        <h2>task 6</h2>
        <?php
            function tap($value,$key)
            {
            echo "$key : $value"."<br>";
            }
            $a = '{"Title": "The Cuckoos Calling",
            "Author": "Robert Galbraith",
            "Detail":
            { 
            "Publisher": "Little Brown"
            }
            }';
            $j1 = json_decode($a,true);
            array_walk_recursive($j1,"tap");
        ?>
    </div>

</body>
</html>