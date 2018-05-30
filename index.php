<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CheckerBoard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>

    body > div {
        line-height: 0;
    }

    div div {
        display: inline-block;
        padding: 0;
        margin: 0;
        width: 40px;
        height: 40px;
    }

    body > div:nth-child(odd) > div:nth-child(odd) {
        background-color: black;
    }

    body > div:nth-child(odd) > div:nth-child(even) {
        background-color: red;
    }

    body > div:nth-child(even) > div:nth-child(odd) {
        background-color: red;
    }

    body > div:nth-child(even) > div:nth-child(even) {
        background-color: black;
    }
    
    
    </style>
</head>
<body>

<?php

for($i = 0; $i < 8; $i++) {
    echo "<div>";
    for($j = 0; $j < 8; $j++) {
        echo "<div></div>";
    }
    echo "</div>";
}


?>
    
</body>
</html>