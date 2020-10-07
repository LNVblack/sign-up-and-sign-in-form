<?php require "db.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href = "style/style.css">
    <title>Главная</title>
</head>
<body>
    <header>
        <nav>
            <div class="menu">
                <a href="/news/">Новости</a>
                <a href="#">Side 2</a>
                <a href="#">Side 3</a>
                <a href="#">Side 4</a>
            </div>
            <div class="auth">
                <a class="status_f" href="signup.php">Регистрация</a>
                <a class="status_f" href="signin.php">Войти</a>
                <a class="status_t" href="signout.php">Выйти</a>
            </div>
        </nav>
    </header>
    <div class="weclome_side">
        <div class="status_t infoblock">
            <p>Вы авторизованы!</p>
        </div>
        <div class="status_f infoblock">
            <p>Вы не авторизованы!</p>
        </div>
    </div>
</body>
</html>
<?php 
if(isset($_SESSION['verfication_user'])){
    echo '<style>.status_t{display:block;}</style>';
}else{
    echo '<style>.status_f{display:block;}</style>';
}
?>