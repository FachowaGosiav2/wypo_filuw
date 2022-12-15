<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include '/xampp_gra/htdocs/aa/includes/header.php';
    include '/xampp_gra/htdocs/aa/includes/nav.php'; 
    $y = $x->query('SELECT * FROM `categories`');
    $y2 = $y->fetch_all(MYSQLI_ASSOC);
    ?>
</head>
<body>
    <form method="post">
    Tytuł <input type="text" name="title"><br>
    Opis <input type="text" name="content"><br>
    <?php
    for($i = 0;$i<count($y2);$i++){
        $y3 = $i+1;
        echo $y2[$i]['name'].'<input type="radio" name="type" value="'.$y3.'"><br>';
    }
    ?>
    <button type="submit">Zatwierdz kategorię</button>
    </form>
    <?php
    if(isset($_POST['title']) and isset($_POST['content']) and isset($_POST['type'])){
    $z = $x->query('INSERT INTO `films`(`name`, `content`, `categories_id`) VALUES ("'.$_POST['title'].'", "'.$_POST['content'].'", "'.$_POST['type'].'")');
    }
    ?>
</body>
</html>