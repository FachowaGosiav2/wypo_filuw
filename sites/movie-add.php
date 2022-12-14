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
    <?php
    for($i = 0;$i<count($y2);$i++){
        echo $y2[$i]['name'].'<input type="radio" name="type" value="'.$i.'"><br>';
    }
    ?>
    </form>
</body>
</html>