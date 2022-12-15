<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include '/xampp_gra/htdocs/aa/includes/header.php';
    include '/xampp_gra/htdocs/aa/includes/nav.php'; 
    $u = $x->query('SELECT * FROM `submit`');
    $u2 = $u->fetch_all(MYSQLI_ASSOC);

    ?>
</head>
<body>
    <?php
    for($i=0;$i<count($u2);$i++){
        if($_GET['film2'] == $u2[$i]['films_id'] and $_GET['id'] == $u2[$i]['users_id']){
            break;
            $tak = 0;
        }
        else{
            $tak = 1;
        }
    if($tak == 1){
        $y = $x->query('INSERT INTO `submit`(`users_id`, `films_id`, `is_lend`) VALUES ("'.$_SESSION['id'].'","'.$_GET['film2'].'","0")');
    }
    }

    if(isset($_GET)){
        header("Location: ./movie-search.php");
    }
    ?>
</body>
</html>