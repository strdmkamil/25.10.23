<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie 6</title>
</head>
<body>
    <form method="post">
        <label>Podaj date urodzenia</label>
        <input type="date" name="data">
        <input type="submit">
    </form>
    <?php
    if (!empty($_POST)){
        $data = $_POST["data"];
        setcookie("urodziny", $data);
        $todaydate = date("Y-m-d");
        if($_COOKIE["urodziny"] == $todaydate){
            echo "Wszysktiego najlepszego przyjacielu!";
        }
        
        }
    ?>
</body>
</html>