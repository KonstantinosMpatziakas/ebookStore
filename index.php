<html>
<?php
session_start();
if( ! isset($_SESSION['username'])) {
	$_SESSION['username']='?';
}
?>
<?php
  include_once 'internal/dbconnect.php';
?>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link href="https://asidirop-srv.iee.ihu.gr/~asidirop/adise/bootstrap/bootstrap.min.css" rel="stylesheet">
     <script src="https://asidirop-srv.iee.ihu.gr/~asidirop/adise/bootstrap/jquery-3.2.1.slim.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://asidirop-srv.iee.ihu.gr/~asidirop/adise/bootstrap/popper.min.js"></script>
    <script src="https://asidirop-srv.iee.ihu.gr/~asidirop/adise/bootstrap/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="ajax/ajax.js"></script>
    </head>
    <body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Εργαστηριο 3</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php?p=start">Αρχικη <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?p=shopinfo">Το καταστημα μας</a>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link" href="?p=products">Τα προϊοντα μας</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?p=contact">Επικοινωνια</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?p=login">Login</a>
      </li>
      <form class="form-inline my-2 my-lg-0" method="POST">
        <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
        <input type="hidden" name="p" value="sr">
        <input class="btn btn-outline-success my-2 my-sm-0" value="search" type="submit" name="submitsr">
      </form>
      </ul>
    <ul class="nav navbar-nav navbar-right">
		<li> <a href="?p=cart"> <span class="glyphicon glyphicon-shopping-cart"></span>cart</a> </li>
	</ul>
  </div>
</nav>
</header>
<div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
          <h3>Products MENU</h3>
          <ul class="nav nav-pills flex-column">
          <?php
                        $sql = 'select * from category order by Name';

                        $result = mysqli_query($conn,$sql);
                        $resultCheck = mysqli_num_rows($result);

                        if($resultCheck>0){
                          while($row = mysqli_fetch_assoc($result)){
                            print "<li><a href='index.php?p=catinfo&catid=$row[ID]'>" .
                                        "$row[Name]</a></li>";
                          }
                        }
                        ?>
          </ul>
          <hr color="black">
          <?php if ($_SESSION['username'] != '?') : ?>
              <h4>USER MENU</h4>
              <ul class="nav nav-pills flex-column"> 
                <li class="nav-item">
                  <a class="nav-link" href="?p=myOrders">MyOrders<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?p=myDetails">MyDetails</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?p=logout">Logout</a>
                </li>
              </ul>
            <?php endif; ?>

      <?php 
        $check = "SELECT uname FROM customer WHERE is_admin=1";
        $result=mysqli_query($conn,$check);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck>0){
          while($row=mysqli_fetch_assoc($result)){ ?>
       <?php  if($_SESSION['username']==$row['uname']): ?>
                        <h4>ADMIN MENU</h4>
                        <hr color="black">
                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:show_customers_j()">Customers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:show_orders()">Orders</a>
                            </li>   
                        </ul>
                    <?php
                      endif;  
                      }}
                    ?>

        </nav>
<main id="maincon" role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3"> 
<?php
if( ! isset($_REQUEST['p'])) {
	$_REQUEST['p']='start';
}
$p = $_REQUEST['p'];
switch ($p){
case "start" :		require "internal/start.php";   
					break;
case "shopinfo": 	require "internal/shopinfo.php";
					break;
case "login" :		require "internal/login.php";
					break;
case 'do_login':	require "internal/do_login.php";
          break;
case 'catinfo': require "internal/catinfo.php";
          break;
case 'add2cart': require "ajax/add2cart.php";
          break;
case 'cart': require "internal/cart.php";
     break;
//case 'productinfo' : require "internal/productinfo.php";
  //break;
case 'products': require "internal/products.php";
  break;
  case 'do_login': require "internal/do_login.php";
    break;
  case 'completion': require "internal/completion.php";
    break;
  case 'myOrders' : require "internal/myOrders.php";
    break;
  case 'myDetails' : require "internal/myDetails.php";
    break;
  case 'logout' : require "internal/logout.php";
    break;
  //case 'customers' : require "internal/customers.php";
    //break;
  case 'register' : require "internal/register.php";
    break;
  case 'empty' : require "internal/empty.php";
    break;
  case 'sr' : require "internal/search.php";
    break;
default: 
	print "Η σελίδα δεν υπάρχει"; 
}
?>
</main>
      </div>
    </div>
    <div id="footer"></div>
    </body>
</html>
