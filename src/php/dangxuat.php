<?php 
    setcookie('user','xóa',time()- (86400 * 30),"/");
    header('Location: index.php');
?>