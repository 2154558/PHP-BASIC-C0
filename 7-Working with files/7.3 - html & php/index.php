<html>
<head>
</head>
<body>

    <div class="menu">
        <?php include 'menu.php'; ?> <!-- Op deze regel wordt een menu ingevoegd -->
    </div>
    <div id="isMeerderJarig">
        <?php
        $leeftijd = 18;
            if($leeftijd >= 18){
                echo "welkom";
            }
            else{
                echo "je bent te jong";
            }
        ?>
    </div>



</body>
</html>