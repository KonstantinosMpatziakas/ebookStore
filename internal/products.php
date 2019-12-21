<?php 
    $pid = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;
    $sql = "select * from product";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);
    ?>
    <table class="table table-hover">
    <thead><tr><th>Name</th><th>Price</th></tr></thead>
    <?php
    if($resultCheck>0){
        while($row=mysqli_fetch_assoc($result)){
           echo "<tr><td><a href='index.php?p=productinfo&pid=$row[ID]'>" ."$row[Title]</a></td>
                    <td>&euro;$row[Price]</td></tr>";
        }
    }
    ?>
    </table>