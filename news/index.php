<?php require "../db.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href = "../style/style.css">
    <title>Новости</title>
</head>
<body>
    <header>
        <nav>
            <div class="menu">
                <a href="../index.php">На главную</a>
            </div>
            <div class="auth">
                <a class="status_f" href="signup.php">Регистрация</a>
                <a class="status_f" href="signin.php">Войти</a>
                <a class="status_t" href="signout.php">Выйти</a>
            </div>
        </nav>
    </header>
    <hr>
    <section class="content">
        <div class="content_info">
            <div class="left_side">
                <p><a href="#1">What is Lorem Ipsum?</a></p>
                <p><a href="#2">Why do we use it?</a></p>
                <p><a href="#3">Where does it come from?</a></p>
                <p><a href="#4">Where can I get some?</a></p>
                <p><a href="#5">What is Lorem Ipsum?(2)</a></p>
                <p><a href="#6">Why do we use it?(2)</a></p>
                <p><a href="#7">Where does it come from?(2)</a></p>
                <p><a href="#8">Where can I get some?(2)</a></p>
            </div>
            <div class="right_side">
                <p class="paragraph_1"><a name="1"></a>What is Lorem Ipsum?</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    when an unknown printer took a galley of type and scrambled it to make a type 
                    specimen book. It has survived not only five centuries, but also the leap into 
                    electronic typesetting, remaining essentially unchanged. It was popularised in 
                    the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                    and more recently with desktop publishing software like Aldus PageMaker including 
                    versions of Lorem Ipsum</p>
                <br>
                <p class="paragraph"><a name="2"></a>Why do we use it?</p>
                <p>It is a long established fact that a reader will be distracted by the readable content of 
                    a page when looking at its layout. The point of using Lorem Ipsum is that it has 
                    a more-or-less normal distribution of letters, as opposed to using 'Content here, 
                    content here', making it look like readable English. Many desktop publishing packages 
                    and web page editors now use Lorem Ipsum as their default model text, and a search for 
                    'lorem ipsum' will uncover many web sites still in their infancy. Various versions have 
                    evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                <p class="paragraph"><a name="3"></a>Where does it come from?</p>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. 
                    It has roots in a piece of classical Latin literature from 45 BC, 
                    making it over 2000 years old. Richard McClintock, a Latin professor at 
                    Hampden-Sydney College in Virginia, looked up one of the more obscure Latin 
                    words, consectetur, from a Lorem Ipsum passage, and going through the cites of 
                    the word in classical literature, discovered the undoubtable source. Lorem Ipsum 
                    comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" 
                    (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise 
                    on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 
                    "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                <br>
                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for 
                    those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" 
                    by Cicero are also reproduced in their exact original form, accompanied by English 
                    versions from the 1914 translation by H. Rackham.</p>
                <p class="paragraph"><a name="4"></a></a>Where can I get some?</p>
                <p>There are many variations of passages of Lorem Ipsum available, 
                    but the majority have suffered alteration in some form, by injected humour, 
                    or randomised words which don't look even slightly believable. If you are 
                    going to use a passage of Lorem Ipsum, you need to be sure there isn't anything 
                    embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the 
                    Internet tend to repeat predefined chunks as necessary, making this the first true 
                    generator on the Internet. It uses a dictionary of over 200 Latin words, combined 
                    with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. 
                    The generated Lorem Ipsum is therefore always free from repetition, injected humour, 
                    or non-characteristic words etc.</p>
                <p class="paragraph"><a name="5"></a>What is Lorem Ipsum?</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    when an unknown printer took a galley of type and scrambled it to make a type 
                    specimen book. It has survived not only five centuries, but also the leap into 
                    electronic typesetting, remaining essentially unchanged. It was popularised in 
                    the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                    and more recently with desktop publishing software like Aldus PageMaker including 
                    versions of Lorem Ipsum</p>
                <br>
                <p class="paragraph"><a name="6"></a>Why do we use it?</p>
                <p>It is a long established fact that a reader will be distracted by the readable content of 
                    a page when looking at its layout. The point of using Lorem Ipsum is that it has 
                    a more-or-less normal distribution of letters, as opposed to using 'Content here, 
                    content here', making it look like readable English. Many desktop publishing packages 
                    and web page editors now use Lorem Ipsum as their default model text, and a search for 
                    'lorem ipsum' will uncover many web sites still in their infancy. Various versions have 
                    evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                <p class="paragraph"><a name="7"></a>Where does it come from?</p>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. 
                    It has roots in a piece of classical Latin literature from 45 BC, 
                    making it over 2000 years old. Richard McClintock, a Latin professor at 
                    Hampden-Sydney College in Virginia, looked up one of the more obscure Latin 
                    words, consectetur, from a Lorem Ipsum passage, and going through the cites of 
                    the word in classical literature, discovered the undoubtable source. Lorem Ipsum 
                    comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" 
                    (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise 
                    on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 
                    "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                <br>
                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for 
                    those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" 
                    by Cicero are also reproduced in their exact original form, accompanied by English 
                    versions from the 1914 translation by H. Rackham.</p>
                <p class="paragraph"><a name="8"></a>Where can I get some?</p>
                <p>There are many variations of passages of Lorem Ipsum available, 
                    but the majority have suffered alteration in some form, by injected humour, 
                    or randomised words which don't look even slightly believable. If you are 
                    going to use a passage of Lorem Ipsum, you need to be sure there isn't anything 
                    embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the 
                    Internet tend to repeat predefined chunks as necessary, making this the first true 
                    generator on the Internet. It uses a dictionary of over 200 Latin words, combined 
                    with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. 
                    The generated Lorem Ipsum is therefore always free from repetition, injected humour, 
                    or non-characteristic words etc.</p><br><br>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
<?php 
if(isset($_SESSION['verfication_user'])){
    echo '<style>.status_t{display:block;}</style>';
}else{
    echo '<style>.status_f{display:block;}</style>';
}
?>