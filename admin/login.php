<!DOCTYPE html>
<html lang="en">
    <?php
    include '/xampp_gra/htdocs/aa/includes/header.php';
    include '/xampp_gra/htdocs/aa/includes/nav.php';
    $y = $x->query('SELECT `id`,`name`, `login`, `password` FROM `users` WHERE is_admin = 1;');
    $y2 = $y->fetch_all(MYSQLI_ASSOC);
    ?>
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
                        $_SESSION['id_admin'] = $y2[$i]['id'];
                        $_SESSION['name'] = $_POST['name'];
                        $_SESSION['id'] = $y2[$i]['id'];
                        header("Location: /aa/index.php");
                        break;
                    }
                }
            }
        }
    $x->close()
    ?>
</body>
</html>