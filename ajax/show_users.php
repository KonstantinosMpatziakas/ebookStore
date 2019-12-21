<?php
    session_start();
    require 'includes/dbconnect.php';
    $sql = "select * from customer";
    $result = $conn->query($sql);

    $myArray = array();


    while ($row = $result->fetch_assoc()) {
		$myArray[] = $row;
	}
	
	echo json_encode($myArray);
	
    $result->close();
?>