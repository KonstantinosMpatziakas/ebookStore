<?php 
    require_once "includes/dbconnect.php";
    if($_SESSION["username"]!="?"){
        $customer = $_SESSION["customer_id"];
        $sql = "INSERT INTO orders(Customer, oDate) VALUES ($customer, now())";
        mysqli_query($conn, $sql);
        $orderid = $conn->insert_id;
        foreach($_SESSION['cart'] as $p=>$q){
            $sql2 = "INSERT INTO orderdetails(Orders, Quantity, Product) VALUES ($orderid, $q, $p)";
            mysqli_query($conn,$sql2);
        }
    }
?>