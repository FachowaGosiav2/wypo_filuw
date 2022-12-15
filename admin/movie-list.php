<!DOCTYPE html>
<html lang="en">
<head>
<?php
    include '/xampp_gra/htdocs/aa/includes/header.php';
    include '/xampp_gra/htdocs/aa/includes/nav.php'; 
    $y = $x->query('SELECT u.name, f.name, c.name, s.is_lend, s.users_id, s.films_id FROM submit AS s JOIN users AS u ON u.id = s.users_id JOIN films AS f ON f.id = s.films_id JOIN categories AS c ON f.categories_id = c.id WHERE is_lend = 0;');
    $y2 = $y->fetch_all();
?>
</head>
<body>
    Nie zakceptowane <br>
    <?php
    for($i = 0;$i<count($y2);$i++){
        echo 'Nazwa użytkownika '.$y2[$i][0].'<br>
        Nazwa filmu '.$y2[$i][1].'<br>
        Kategoria '.$y2[$i][2].'<br>
        <a href="./submit.php?user='.$y2[$i][4].'&film='.$y2[$i][5].'">zaakceptuje</a><br>
        <a href="./movie-details?user='.$y2[$i][4].'&film='.$y2[$i][5].'">szczegóły</a><br>
        ';
    }
    ?>
    Zakceptowane <br>
    <?php
    $u = $x->query('SELECT u.name, f.name, c.name, s.is_lend, s.users_id, s.films_id FROM submit AS s JOIN users AS u ON u.id = s.users_id JOIN films AS f ON f.id = s.films_id JOIN categories AS c ON f.categories_id = c.id WHERE is_lend = 1;');
    $u2 = $u->fetch_all();

    for($i = 0;$i<count($u2);$i++){
        echo 'Nazwa użytkownika '.$u2[$i][0].'<br>
        Nazwa filmu '.$u2[$i][1].'<br>
        Kategoria '.$u2[$i][2].'<br>
        <a href="./movie-details.php?user='.$u2[$i][4].'&film='.$u2[$i][5].'">szczegóły</a><br>
        ';
    }
    ?>
</body>
</html>