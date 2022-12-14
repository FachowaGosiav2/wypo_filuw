<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include '/xampp_gra/htdocs/aa/includes/header.php';
    include '/xampp_gra/htdocs/aa/includes/nav.php'; 
    try{
    $y = $x->query('INSERT INTO `submit`(`users_id`, `films_id`, `is_lend`) VALUES ("'.$_SESSION['id'].'","'.$_GET['film2'].'","0")');
    }
    catch(Exception){
    }
    ?>
</head>
<body>
    <?php
    if(isset($_GET)){
        header("Location: ./movie-search.php");
    }
    ?>
</body>
</html>