<?php require "db.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href = "style/style_sign--in_up.css">
    <link rel="icon" href="favicon_hb2_icon.ico" type="image/x-icon" />
    <title>Sing in</title>
</head>
<body>
    <?php
        $data = $_POST;
        if(isset($data['do_signin'])){
            $user = R::getRow('SELECT * FROM username WHERE `username` = ?',array($data['login']));
            if ($user){
                $pass_log_check = R::getRow('SELECT * FROM username WHERE `username` = ? AND `password` = ?', 
                    array($data['login'], md5($data['password'])));
                if ($pass_log_check){
                    $_SESSION['verfication_user'] = $user;
                    echo '<script>document.location.href = "index.php";</script>';
                }else{
                    $errors[] = 'Пароль введен неверно!' ;
                }
            }else{
                $errors[] = 'Пользователь с таким логином не существует';
            }
            if (!empty($errors)){
                echo '<style>.errors_msg{display:block;}</style>';
            }
        }
    ?>
    <div class="container">
        <form class="form-singin" method="POST" action="/signin.php">
            <div class="errors_msg">
                <?php 
                    echo array_shift($errors);
                ?>
            </div>
            <h2>Sign in</h2>
            <p>
                <input type="text" name="login" class="form-control" placeholder="Login" value="<?php echo @$data['login'];?>" required>
            </p>
            <p>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </p>
            <p>
                <button class="btn" name="do_signin" type="submin">Logi n</button>
            </p>
        </form>
    </div>
</body>
</html>