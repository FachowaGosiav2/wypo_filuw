<!DOCTYPE html>
<html lang="en">
    <?php
    include '/xampp_gra/htdocs/aa/includes/header.php';
    include '/xampp_gra/htdocs/aa/includes/nav.php'
    ?>
<body>
    <?php
    echo '
    <form action="'.session_destroy().'" method="POST">
        <button type="submit">Wyloguj się</button>
    </form>
    ';
    if(isset($_POST)){
        header("Location: /aa/index.php");
    }
    ?>
</body>
</html>