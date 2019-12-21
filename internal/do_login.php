Proccessing login.....


<?php
	require_once "includes/dbconnect.php";
	if(isset($_REQUEST['username'])){
	$u = $_REQUEST['username'];
	$p = $_REQUEST['pass'];

	$sql = "SELECT * FROM customer WHERE uname=? AND passwd=?";
	if ($stmt = $conn->prepare($sql)) {
        /* bind parameters for markers */
        $stmt->bind_param("ss", $u, $p);

        /* execute query */
        $stmt->execute();

        /* instead of bind_result: */
        $result = $stmt->get_result();

        /* now you can fetch the results into an array - NICE */
        while ($myrow = $result->fetch_assoc()) {

            // use your $myrow array as you would with any other fetch
            $_SESSION['customer_id'] = $myrow['ID'];  // customer ID
            $_SESSION['is_admin'] = $myrow['is_admin'];
            $_SESSION['username'] = $u;
            header("location: index.php?p=start");
        }
	}
}
?>