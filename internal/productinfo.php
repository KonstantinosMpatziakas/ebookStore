<?php
if (isset($_POST['function']) && $_POST['function'] == 'add') {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    $pid = $_POST['pid'];
    $qty = $_POST['qty'];
    
    if (!isset($_SESSION['cart'][$pid])) {
        $_SESSION['cart'][$pid] = 0;
    }

    $_SESSION['cart'][$pid] += $qty;
}
$pro = isset($_REQUEST['pid']) ? $_REQUEST['pid'] : null;
$sql = "select * from product where ID=?";
//print "<pre>pro = $pro</pre>";
//print "<pre>sql = $sql</pre>";


if( $stmt = $conn->prepare($sql) ) {
	$stmt->bind_param("i", $pro );
	$stmt->execute();
	$result = $stmt->get_result();
	while ($row = $result->fetch_assoc()) {
		print "<h1 style='font-weight:bold'>$row[Title]</h1>".
		"<p>$row[Description]</p>".
		"<p style='font-size:20px'><kbd>price:&euro;$row[Price]</kbd></p>";
	}
}
?>

<form action="" method="POST">   
    <input name="qty" type="number" value="1">      
    <input type="hidden" name="pid" value="<?php echo "$pro"?>">
<!--    <input type="hidden" name="p" value="add_cart">-->
    <input type='hidden' name='function' value='add'/>
    <input class="btn btn-primary"  type="submit" value="Add to Cart">
</form>
