<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include '/xampp_gra/htdocs/aa/includes/header.php';
    include '/xampp_gra/htdocs/aa/includes/nav.php'; 
    $y = $x->query('SELECT s.users_id, s.films_id, u.name, f.name, f.content, c.name, s.is_lend FROM submit AS s JOIN users AS u ON u.id = s.users_id JOIN films AS f ON f.id = s.films_id JOIN categories AS c ON f.categories_id = c.id WHERE `users_id` = "'.$_GET['user'].'" AND `films_id` = "'.$_GET['film'].'"');
    $y2 = $y->fetch_all();
    ?>
</head>
<body>
    <?php
    echo 'Id użytkownika '.$y2[0][0].'<br>
    Id filmu '.$y2[0][1].'<br>
    Nazwa użytkownika '.$y2[0][2].'<br>
    Tytuł filmu '.$y2[0][3].'<br>
    Opis filmu '.$y2[0][4].'<br>
    Gatunek '.$y2[0][5].'<br>
    ';
    if($y2[0][6] == 1){
        $za = 'zatwierdzone<br>';
    }
    else{
        $za = 'nie zatwierdzone <br>';
    }
    echo $za;
    ?>
</body>
</html>