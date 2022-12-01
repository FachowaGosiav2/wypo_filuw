<!DOCTYPE html>
<html lang="en">
    <?php
    include '/xampp_gra/htdocs/aa/includes/header.php';
    ?>
<body>
    <?php
    echo '
    <form action="'.session_destroy().'">
        <button type="submit"></button>
        header("Location: /aa/index.php")
    </form>
    ';
    ?>

</body>
</html>