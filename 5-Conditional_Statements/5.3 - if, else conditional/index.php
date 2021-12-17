<!DOCTYPE html>
<html>
<body>

<?php
$test1 =  (3);
$test2 = (6);

if ($test1 == $test2){
    echo ("gelijk");
}
else{ 
    echo("niet gelijk");
}

if ($test1 /= $test2){
    echo ("ongelijk");
}
else{ 
    echo("gelijk");
}

if ($test1 === $test2){
    echo ("identiek");
}
else{ 
    echo("niet identiek");
}

if ($test1 > $test2){
    echo ("groter");
}
else{ 
    echo("kleiner");
}

if ($test1 < $test2){
    echo ("kleiner");
}
else{ 
    echo("groter");
}

if ($test1 >= $test2){
    echo ("groter of gelijk");
}
else{ 
    echo("kleiner");
}

if ($test1 <= $test2){
    echo ("kleiner of gelijk");
}
else{ 
    echo("groter");
}


?>

</body>
</html>