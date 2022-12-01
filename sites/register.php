<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <?php
    $x = new mysqli('127.0.0.1', 'root', '', 'mydb');
    ?>
</head>
<body>
    <form method="POST">
        Imie:
        <input type="text" name="name"><br>
        Login:
        <input type="text" name='login'><br>
        Hasło:
        <input type="password" name="password"><br>
        <button type="submit">Zarejestruje się</button>   
    </form>

    <?php
    if(isset($_POST["name"]) and isset($_POST['login']) and isset($_POST["password"])){
        $y = "INSERT INTO `users`(`name`, `is_admin`, `login`, `password`) VALUES ('".$_POST["name"]."','0','".$_POST['login']."','".$_POST["password"]."');";
        $x->query($y);
        header('Location: login.php');
    }
    $x->close();
    ?>
</body>
</html>