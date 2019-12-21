<?php 
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    unset($_SESSION['cart']);
    unset($_SESSION['customer_id']);

    $_SESSION['message']="bye bye!";
    echo("<script>location.href ='index.php';</script>");
?>