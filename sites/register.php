<!DOCTYPE html>
<html lang="en">
    <?php
    include '/xampp_gra/htdocs/aa/includes/header.php';
    include '/xampp_gra/htdocs/aa/includes/nav.php';
    ?>
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
        header('Location: /sites/login.php');
    }
    $x->close();
    ?>
</body>
</html>