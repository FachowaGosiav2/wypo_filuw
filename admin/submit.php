<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include '/xampp_gra/htdocs/aa/includes/header.php';
    include '/xampp_gra/htdocs/aa/includes/nav.php'; 
    $y = $x->query('UPDATE `submit` SET `is_lend`="1" WHERE `users_id` = "'.$_GET['user'].'" AND `films_id` = "'.$_GET['film'].'"');
    ?>
</head>
<body>
    <?php
    if(isset($_GET)){
        header("Location: ./movie-list.php");
    }
    ?>
</body>
</html>