<?php include("class_lib.php"); ?>
<?php
    $stefan = new person();
    $jimmy = new person;
    $stefan->set_name("Hoàng");
    $jimmy->set_name("Nguyễn");
    echo $stefan->get_name();
    echo  $jimmy->get_name();
?>