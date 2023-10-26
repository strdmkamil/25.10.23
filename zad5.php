<?php
if(!isset($_COOKIE['odwiedzeń'])){
    $ile = 1;
}else{
    $ile = (int)$_COOKIE['odwiedzeń'];
    if($ile < 1)
        $ile = 1;
    $ile++;
}
setcookie('odwiedzeń', "$ile");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad 5</title>
</head>
<body>
    <p>
        <?php
        echo "Licznik: $ile <br>";
        if($ile == 10 || $ile == 100 || $ile == 1000){
            echo "Odwiedziłeś stronę już $ile razy!";
        }
        ?>
    </p>
</body>
</html>