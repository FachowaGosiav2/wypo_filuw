<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
    <?php
    include '/xampp_gra/htdocs/aa/includes/nav.php'; 
    $y = $x->query('SELECT `name`, `content` FROM `films`');
    $y2 = $y->fetch_all(MYSQLI_ASSOC);
    $_SESSION['id'] = 0;
    ?>
</head>
<body>
    Witam na stronie głównej nie obiecuj <br>że będzie ładnie
    <?php
    echo $_SESSION['id'];
    if($_SESSION['id'] > 0){
    echo'
    <form action="register.php">
        <button type="submit">Zarejestruj się</button>
    </form>
    <form action="login.php">
        <button type="submit">Zaloguj się</button>
    </form>
    ';
    }
    else{
        echo'
        <form action="logout.php">
        <button type="submit">Wyloguj się</button>
        </form>
        ';
    }
    ?>
</body>
</html>