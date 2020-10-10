<?php
if ($_SESSION['verfication_user']['role'] != "0"){
    echo '<style>.status_a{display:none;}</style>';
}else{echo '<style>.status_a{display:block;}</style>';}?>
<?php 
if(isset($_SESSION['verfication_user'])){
    echo '<style>.status_t{display:block;}</style>';
}else{
    echo '<style>.status_f{display:block;}</style>';
}?>