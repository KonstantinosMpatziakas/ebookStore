<?php
    if(isset($_SESSION['customer_id'])){
        $customer = $_SESSION['customer_id'];
    }
    $sql = "SELECT * FROM orderdetails INNER JOIN orders ON orderdetails.Orders = orders.ID INNER JOIN Product ON orderdetails.Product = product.ID WHERE orders.Customer=$customer";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);
    ?>
    <table class="table table-striped">
    <th>Date</th>
    <th>Product</th>
    <th>Quantity</th>
    <th>Price</th>
    <?php
    if($resultCheck>0){
        while($row=mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $row['oDate']; ?></td>
                <td><?php echo $row['Title']; ?></td>
                <td><?php echo $row['Quantity']; ?></td>
                <td><?php echo $row['Price']; ?></td>
            </tr>
            <?php
        }
    } ?>
    </table>