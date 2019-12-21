<h1>my cart</h1>
<table class="table table-hover">

<tr>
<th>Title</th>
<th>Quantity</th>
<th>Price(1)</th>
<th>Price</th>
</tr>
<?php
if (!isset($_SESSION['cart'])) {
	$_SESSION['cart'] = array();
}
$cost=0;
$sql = "select * from product where ID=?";
$stmt = $conn->prepare($sql);
$total=0;
foreach($_SESSION['cart'] as $p => $q) {
 $stmt->bind_param("i", $p);
 $stmt->execute();
 $result = $stmt->get_result();
 $row = $result->fetch_assoc();
 $cost += ($q * $row["Price"]);
 $total += $cost;
 if($q != 0) {
 	print "<tr><td>$row[Title]</td>".
			"<td>". $q . "</td>".
		   "<td>$row[Price]</td>".
		   "<td>". $cost . "</td>";
 }
}
?>
<?php

print "<tr><td style=". "font-size:larger "."><left><b>Total</b></left></td>".
	  "<td></td>".
	  "<td></td>".
	  "<td style="."font-size:larger".">". $total ."</td></tr>";
?>
</table>

<form action="index.php?" method="get"> 
    <input type="hidden" name="p" value="completion">
    <input class="btn btn-primary"  type="submit" value="Purchase"  >
        
</form>

<form action="index.php?" method="get"> 
 	<input type="hidden" name="p" value="empty">
 	<input class="btn btn-primary"  type="submit" value="Empty Cart" > 
</form>