<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

    //While loop loops for vairable

    $a = 1;

    while ($a <= 5) {
        echo "hi there<br>";
        $a++;
    }

     //Do while loop loops once then checks for vairable

     $b = 1;
     do {;
        echo "hi there1<br>";
        $b++;
     }
     while ($b <= 5);
    //For loop loops for specific variables

     for ($c = 0; $c <= 10; $c++) {
         echo "hi there3<br>";
     }

    //Foreach loop loops for each vairable

     $array = array("Belal", "Dylan", "Jerry", "Ammar", "Bassem");

     foreach ($array as $loopdata) {
        echo "My name is".$loopdata."<br>";
     }


?>



</body>
</html>