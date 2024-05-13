<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variables</title>
</head>
<body>
    <?php
    // scalar types
    $name="Jose majimaji";
    echo $name;
    $int=123333;
    $bool=true;
    $float=1.344;
    echo $int,$bool,$float. "<br>";
    // array types
    $names=["john","Daniel"];

    echo implode("",$names);
    
    ?>
    <p>Hi, my name is <?php  echo $name;?> i am learning php</p>
</body>
</html>