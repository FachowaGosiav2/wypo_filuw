<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include '/xampp_gra/htdocs/aa/includes/header.php';
    include '/xampp_gra/htdocs/aa/includes/nav.php';
    $y = $x->query('SELECT f.id, f.name, f.content, c.name FROM films AS f JOIN categories AS c ON f.categories_id = c.id WHERE f.id = '.$_GET['film'].';');
    $y2 = $y->fetch_array(); 
    ?>
</head>
<body>
    <?php
    echo '
    Numer filmu '.$y2['id'].'<br>
    Nazwa filmu '.$y2[1].' <br>
    Gatunek '.$y2['name'].' <br>
    Opis '.$y2['content'].'
    
    ';
    ?>
    
</body>
</html>