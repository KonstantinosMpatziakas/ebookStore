<style>
    input[type=text]{
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        resize: vertical;
    }
    input[type=password]{
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        resize: vertical;
    }
    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: left;
    }
</style>
<form action="" method="POST">
    First Name: <input type="text" name="Fname" >
    Last Name: <input type="text" name="Lname" id="">
    Address: <input type="text" name="Address" id="">
    Phone: <input type="text" name="Phone" id="">
    Username: <input type="text" name="Username" id="">
    Password: <input type="password" name="Password" id="">
    <input type="hidden" name="p" value="register">
    <input type="submit" value="register" name="submit">
</form>
<?php 
 $Fname = $_POST['Fname'];
 $Lname = $_POST["Lname"];
 $address = $_POST["Address"];
 $Phone = $_POST["Phone"];
 $uname = $_POST["Username"];
 $passwd = $_POST["Password"];
 $id = 145;
$sql = "INSERT INTO customer (ID, Fname, Lname, Address, Phone, uname, passwd) VALUES ('$id','$Fname','$Lname','$address','$Phone','$uname','$passwd')";
if(isset($_POST['submit'])){
    $result=mysqli_query($conn,$sql);
}
?>
