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
                <a class="status_a" href="signup.php">Регистрация нового пользователя</a>
                <a class="status_f" href="signin.php">Войти</a>
                <a class="status_t" href="signout.php">Выйти</a>
            </div>
        </nav>
    </header>
    <div class="weclome_side">
        <div class="status_t infoblock">
            <p class="hello_msg">Вы авторизованы!</p>
            <p class="hello_name">Привет, <?php echo $_SESSION['verfication_user']["username"];?>.</p>
        </div>
        <div class="status_f infoblock">
            <p class="hello_msg">Вы не авторизованы!</p>
        </div>
    </div>
</body>
</html>
<?php require "auth_checker.php";?>