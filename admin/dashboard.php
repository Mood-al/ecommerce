<?php 

$title = 'dashbaord';
include 'init.php';

?>

<div>
</div>
<?php
include($tpl . 'footer.php');
if(!isset($_SESSION['username'])){
    header('Location: index.php');
}
?>