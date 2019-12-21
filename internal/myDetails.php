<style>
     input[type=text],textarea{
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        resize: vertical;
    }
    
</style>
<?php 
    require_once 'includes/dbconnect.php';

    if(isset($_SESSION["customer_id"])){
        $customer = $_SESSION["customer_id"];
    }else{
        echo 'you are not connected';
    }
    
    $sql = "SELECT * FROM customer WHERE ID=$customer";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck>0){
        while($row = mysqli_fetch_assoc($result)){
                $fname=$row['Fname'];
                $lname = $row['Lname'];
                $address = $row['Address'];
                $phone = $row['Phone'];
            $customer = $_SESSION['customer_id'];
            if(isset($_REQUEST['save'])){
                $fname = $_REQUEST['fname'];
                $lname = $_REQUEST['lname'];
                $address = $_REQUEST['address'];
                $phone = $_REQUEST['phone'];
                $update = "update customer set Fname='$fname', Lname='$lname', Address='$address', Phone='$phone' where ID='$customer'";
                mysqli_query($conn,$update);
            }
        }
    
?>
<form action="" method = "post">
    First name:<input type="text" name="fname" value="<?php echo $fname;?>"><br>
    Last name:<input type="text" name="lname" value="<?php echo $lname?>">
    Address:<textarea name="address"><?php echo $address?></textarea>
    Phone:<input type="text" name="phone" value="<?php echo $phone?>">
    <input type="submit" class="btn btn-primary" value="submit" name="save">
    <input type='reset' class="btn btn-primary" value='ΑΝΑΙΡΕΣΗ'>
    <input type='hidden' name='p' value='myDetails'>
</form>
    <?php }?>