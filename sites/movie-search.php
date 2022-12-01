<!DOCTYPE html>
<html lang="en">
    <?php
    include '/xampp_gra/htdocs/aa/includes/header.php';
    include '/xampp_gra/htdocs/aa/includes/nav.php';
    $y = $x->query('SELECT `name`, `content` FROM `films`');
    $y2 = $y->fetch_all(MYSQLI_ASSOC);
    ?>
<body>
    <?php
    for ($i = 0; $i < count($y2); $i++){
        echo 'tytuł filmu: '.$y2[$i]['name'].'<br>';
        echo 'opis filmu: '.$y2[$i]['content'].'<br>';
        if(isset($_SESSION['id'])){
            echo '
            <form action="">
            <button type="submit">Wyporzycz</button>
            </form>
            ';
        }
        echo '
        <form action="">
        <button type="submit">Zerknij na szczegóły</button>
        </form>
        ';
    }
    ?>


</body>
</html>