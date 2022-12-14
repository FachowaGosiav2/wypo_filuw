<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include '/xampp_gra/htdocs/aa/includes/header.php';
    include '/xampp_gra/htdocs/aa/includes/nav.php'; 
    $y = $x->query('SELECT f.id, f.name, f.content, c.name, s.is_lend FROM submit AS s JOIN films AS f ON s.films_id = f.id JOIN categories AS c ON f.categories_id = c.id WHERE s.users_id = '.$_SESSION['id'].';');
    $y2 = $y->fetch_all();
    ?>
</head>
<body>
    <?php
    for($i = 0;$i<count($y2);$i++){
        echo 'Numer filmy'.$y2[$i][0].'<br>
        Nazwa filmu '.$y2[$i][1].'<br>
        Opis '.$y2[$i][2].'<br>
        Kategoria '.$y2[$i][3].'<br>
        ';
        if($y2[$i][4] == 1){
            $za = 'zatwierdzone';
        }
        else{
            $za = 'nie zatwierdzone';
        }
        echo $za;
    }
    ?>
</body>
</html>