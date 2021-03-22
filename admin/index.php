<?php 
$noNavbar = '';
$title = 'login';

include('init.php');
include($tpl . 'header.php');

session_start();
if(isset($_POST['submit'])){
    $rawPassword = $_POST['password'];
    $password = sha1($rawPassword);
    $username = $_POST['name'];
  
    $stmt =  $conn->prepare('SELECT Username , Password FROM users where Username = ? AND Password = ? AND GroupID = 1 ');
    $stmt->execute(array($username, $password));
    $count = $stmt->rowCount();
  
    if($count > 0){
        $_SESSION['username'] = $username;
        header('Location: dashboard.php');
    }
}
if(isset($_SESSION['username'])){
    header('Location: dashboard.php');
    exit();
}
?>
<div class="container">
    <form class="my-5 w-75 mx-auto" method="POST" action="<?php  $_SERVER["PHP_SELF"]?>">
        <div class="form-group">
            <label for="exampleInputEmail1"><?php echo lang('EMAIL')?></label>
            <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1"><?php echo lang('PASSWORD')?></label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="submit" name="submit" class="btn btn-primary"><?php echo lang('SUBMIT')?></button>
    </form>
</div>
<?php include('includes/templates/footer.php') ?>