<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php
    $x = new mysqli('127.0.0.1', 'root', '', 'mydb');
    $y = $x->query('SELECT `id`,`name`, `login`, `password` FROM `users`;');
    $y2 = $y->fetch_all(MYSQLI_ASSOC);
    session_start();
    ?>
</head>
<body>
    <form method="POST">
            Login:
            <input type="text" name="login"><br>
            Hasło:
            <input type="password" name='password'><br>
            <button type="submit">Zaloguj się</button>
        </form>
        <?php
        if(isset($_POST['login']) && isset($_POST['password'])){
            for($i = 0; $i < count($y2); $i++){
                if($y2[$i]['login'] == $_POST['login']){
                    if($y2[$i]['password'] == $_POST['password']){
                        $x2 = 1;
                        $_SESSION['id'] = $y2[$i]['id'];
                        $_SESSION['name'] = $_POST['name'];
                        header("Location: index.php");
                        break;
                    }
                }
            }
        }
    $x->close()
    ?>
</body>
</html>