<!DOCTYPE html>
<html>
<body>

<?php
function geefTienProcent(){
    $koopPrijs = ('75');
    $korting = ('10');
    $kortingprijs = $koopPrijs / $korting;
    echo $koopPrijs - $kortingprijs;
}
geefTienProcent();
?>

</body>
</html>