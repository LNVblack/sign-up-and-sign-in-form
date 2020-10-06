<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "style_sign--in_up.css">
    <title>Sing in</title>
</head>
<body>
    
    <?php
        require "db.php";
        $data = $_POST;
        if(isset($data['do_signin'])){
            $user = R::find('username', 'username = ?', array($data['login']));
            if ($user){
                if($user){//password_verify($data['password'], $user->password)){
                    //Здесь нужно открыть сессию, но ебаное условие не срабатывает
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
                <button class="btn" name="do_signin" type="submin">Login</button>
            </p>
        </form>
    </div>
</body>
</html>