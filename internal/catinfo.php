<table class="table table-hover">
<tr>
<th>Name</th>
<th>Price</th>
</tr>
<?php
$cat = $_REQUEST['catid'];
$sql = "select * from product where Category=$cat";

$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck>0){
	while ($row = mysqli_fetch_assoc($result)) {
        print "<tr><td><a href='index.php?p=add2cart&pid=$row[ID]'>
        $row[Title]</a></td>"."<td>&euro;$row[Price]</td></tr>";
    }
}
?>
</table>

