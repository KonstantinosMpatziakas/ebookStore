<table class="table table-hover">
<tr>
<th>Name</th>
<th>Description</th>
<th>Price</th>
</tr>
<?php 
    if(isset($_POST['submitsr'])){
        $search = mysqli_real_escape_string($conn,$_POST['search']);
        $sql = "SELECT * FROM product WHERE Title LIKE'%$search%'";
        $result = mysqli_query($conn,$sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck>0){
            while($row = mysqli_fetch_assoc($result)){
                print "<tr><td><a href='index.php?p=add2cart&pid=$row[ID]'>
                $row[Title]</a></td>"."<td>&euro;$row[Description]</td>"."<td>&euro;$row[Price]</td></tr>";
            }
        }
    }
?>
</table>