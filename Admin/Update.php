<?php
$con=mysqli_connect("localhost",'root','','bca5');
if(isset($_GET['id1'])){
    $id=$_GET['id1'];
    $q=mysqli_query($con,"update employee set status=1 where id=$id");
    if($q){
        header("location:View.php");
    }
}
if(isset($_GET['id2'])){
    $id=$_GET['id2'];
    $q=mysqli_query($con,"update employee set status=0 where id=$id");
    if($q){
        header("location:View.php");
    }
}
?>