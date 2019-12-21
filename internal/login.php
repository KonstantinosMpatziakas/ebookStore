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
<?php 
    if(isset($_POST["p"]) && $_POST["p"]=="register"){
        require "internal/register.php";
    }
?>
<form method="post" action="index.php">
Username: <input type="text" name="username"/>
<br/>
Password: <input name="pass" type="password"/>
<br/>
<input type="submit" value="LOGIN"/>
<input name="p" value="do_login" type="hidden">
</form>
<br>
<br>
<br>
<h4>New Customer?</h4>
<form action="" method="post">
    <input type='hidden' name='p' value='register' />
    <input class="btn btn-info" type="submit" value="register">
</form>