<?php require "db.php";?> 
<?php 
if (!isset($_SESSION['verfication_user'])){
    echo '<script>document.location.href = "index.php";</script>';
}else if ($_SESSION['verfication_user']['role'] != "0"){
    echo '<script>document.location.href = "index.php";</script>';}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href = "style/style_sign--in_up.css">
    <link rel="icon" href="favicon_hb2_icon.ico" type="image/x-icon" />
    <title>Sign up</title>
</head>
<body>
    <style>
        body{
            background-color: rgb(54, 57, 63);
        }
    </style>
    <?php
        $data = $_POST;
        if(isset($data['do_signup'])){
            
            if ($data['password'] == ''){
                $errors[] = 'Введите пароль!';
            }
            if ($data['password_2'] != $data['password']){
                $errors[] = 'Пароли не совпадают!';
            }
            if (strlen($data['password']) < 8){
                $errors[] = 'Пароль должен состоять минимум из 8 символов!';
            }
            if (R::count('username', "username = ?", array($data['login'])) > 0){
                $errors[] = 'Пользователь с таким логином уже существует!';
            }
            if (R::count('username', "email = ?", array($data['email'])) > 0){
                $errors[] = 'Пользователь с таким email уже существует!';
            }
            if(empty($errors)){
                $user = R::dispense('username');
                $user->username = $data['login'];
                //$user->password = password_hash($data['password'], PASSWORD_DEFAULT);
                $user->password = md5($data['password']);
                $user->email = $data['email'];
                $user->firstname = $data['firstname'];
                $user->lastname = $data['lastname'];
		        if ($data['av'] == 'on'){
                    $user->role = 0;
                }else{$user->role = 1;}
                R::store($user);
                echo '<script>document.location.href = "index.php";</script>';
            }else{
                echo '<style>.errors_msg{display:block;}</style>';
            }
        }
    ?>
    <div class="container">
        <form class="form-singup" method="POST" action="/signup.php">
            <div class="errors_msg">
                <?php 
                    echo ''.array_shift($errors);
                ?>
            </div>
            <h2>Sign up</h2>
            <p>
                <input type="text" name="firstname" placeholder="Имя" value="<?php echo @$data['firstname'];?>" required>
            </p>
            <p>
                <input type="text" name="lastname" class="form-control" placeholder="Фамилия" value="<?php echo @$data['lastname'];?>" required>
            </p>
            <p>
                <input type="text" name="login" class="form-control" placeholder="Логин" value="<?php echo @$data['login'];?>" required>
            </p>
            <p>
                <input type="email" name="email" class="form-control" placeholder="E-mail" value="<?php echo @$data['email'];?>" required>
            </p>
            <p>
                <input type="password" name="password" class="form-control" placeholder="Пароль" required>
            </p>
            <p>
                <input type="password" name="password_2" class="form-control" placeholder="Подтверждение пароля" required>
            </p>
		    <p>
                <input type="checkbox" name="av" class="form-control" id="av">
	                <label for="av">Выдать права администратора?</label>
            </p>
            <p>
                <button class="btn" name="do_signup" type="submin">Create Account</button>
            </p>
        </form>
    </div>
</body>
</html>