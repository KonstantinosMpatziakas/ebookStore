<?php
    $sql = "SELECT * FROM customer";
    $result = mysqli_query($conn,$sql);
    $resultCheck=mysqli_num_rows($result);
    ?>
    <h2>Customers</h2>
    <table class="table table-striped">
    <?php 
        if(isset($_POST['delete'])){
            $key = $_POST["key"];
            $del = "DELETE FROM customer WHERE ID=$key";
            mysqli_query($conn,$del);
        }
    ?>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Address</th>
    <th>Phone</th>
    <th>Username</th>
    <th>Action</th>
    <?php
    if($resultCheck>0){
        while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <form action="" method="post">
                <td><?php echo $row['Fname']; ?></td>
                <td><?php echo $row['Lname']; ?></td>
                <td><?php echo $row['Address']; ?></td>
                <td><?php echo $row['Phone']; ?></td>
                <td><?php echo $row['uname']; ?></td>
                <td><input type="checkbox" name="key" value="<?php echo $row['ID']; ?>"></td>
            </tr>
            <?php
        }
    } 
 ?>
    </table>
    <input type="submit" name="delete" class="btn btn-danger" value="Remove">
    </form>
  