<!DOCTYPE html>
<html lang="en">
    <?php
    include '/xampp_gra/htdocs/aa/includes/header.php';
    include '/xampp_gra/htdocs/aa/includes/nav.php'; 
    $y = $x->query('SELECT `name`, `content` FROM `films`');
    $y2 = $y->fetch_all(MYSQLI_ASSOC);
    ?>
<body>
    Witam na stronie głównej nie obiecuj <br>że będzie ładnie
    
    <?php
    echo'
    <form action="sites/movie-search.php">
    <button type="submit">Zerknij na możliwe filmy</button>
    </form>
    ';
    if(isset($_SESSION['id'])){
            echo'
        <form action="./sites/logout.php">
        <button type="submit">Wyloguj się</button>
        </form>
        <form action="./sites/movie-my.php">
        <button type="submit">Twoje filmy</button>
        </form>
        <form action="./sites/movie-add.php">
        <button type="submit">Dodaj film</button>
        </form>
        ';
    }
    else{
        echo'
        <form action="./sites/register.php">
            <button type="submit">Zarejestruj się</button>
        </form>
        <form action="./sites/login.php">
            <button type="submit">Zaloguj się</button>
        </form>
        ';
    }
    ?>
</body>
</html>