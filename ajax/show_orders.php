<table class="table table-hover">
            <th>Title</th>
            <th>Quantity</th>
            <th>Date</th>
<?php
    require '../includes/dbconnect.php';

    $sql = "SELECT * FROM orders INNER JOIN orderdetails ON Orders.ID=orderdetails.Orders INNER JOIN product ON orderdetails.Product = product.ID";
    $result = mysqli_query($conn,$sql);
    $resultCheck=mysqli_num_rows($result);
    if($resultCheck>0){
        while($row = mysqli_fetch_assoc($result)){
         ?>
            <tr>
                <td><?php echo $row['Title'] ?></td>
                <td><?php echo $row['Quantity'] ?></td>
                <td><?php echo $row['oDate'] ?></td>
            </tr>
            
         <?php   
        }
    }
?>
</table>
