<!DOCTYPE html>
<html>
<body>

<?php
$test1 = 1;
$test2 = 2;

if($test1 < 10 && $test2 > 1){
    echo("het klopt");
}
else{
    echo("het klopt niet");
}

if($test1 == 1|| $test2 < 1){
    echo("het klopt");
}
else{
    echo("het klopt niet");
}

if($test1 < 10 xor $test2 < 1){
    echo("het klopt");
}
else{
    echo("het klopt niet");
}

if(! $test1 == 10){
    echo("het klopt");
}
else{
    echo("het klopt niet");
}

?>

</body>
</html> 