
<?php

if($_SESSION['username']!='?')
{
	echo "<h3>Empty Cart!</h3>";

}
else{
	echo "ERROR: You must "."<a href='index.php?p=login'>login...</a>";
	}
//header( "refresh:5;url=index.php" );
unset($_SESSION['cart']);

?>