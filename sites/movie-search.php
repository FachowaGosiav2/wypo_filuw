<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php
    $x = new mysqli('127.0.0.1', 'root', '', 'mydb');
    $y = $x->query('SELECT `name`, `content` FROM `films`');
    $y2 = $y->fetch_all(MYSQLI_ASSOC);
    session_start();
    ?>
</head>
<body>
    <?php
    if(isset($_SESSION['id']) and isset($_SESSION['name']))
    for ($i = 0; $i < count($y2); $i++){
        echo 'tytuł filmu: '.$y2[$i]['name'].'<br>';
        echo 'opis filmu: '.$y2[$i]['content'].'<br>';
    }
    ?>
</body>
</html>