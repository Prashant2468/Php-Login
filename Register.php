<?php
$con=mysqli_connect("localhost","root","","bca5");
if(isset($_POST['btnregister'])){
    $name=$_POST['txtname'];
    $email=$_POST['txtemail'];
    $password=$_POST['txtpassword'];
    $pic=$_FILES['txtpic']['name'];
    $dst="./images/".$pic;

    $q=mysqli_query($con,"insert into employee values('','$name','$email','$password','$pic',0)");
    if($q){
        move_uploaded_file($_FILES['txtpic']['tmp_name'],$dst);
        echo "Inserted";
    }else{
        echo "Not Inserted";
    }
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>

    .Container{
        height:auto;
        width:500px;
        padding:20px;
        background-color: rgba(1200, 1502, 100);
        border-radius:15px;
        }       
</style>
    <center>
        <form method="POST" class="form-control" enctype="multipart/form-data">
                <div class="Container m-2" id="box">
                <div class="m-4 mx-2">
                    <input type="text" name="txtname" class="form-control" placeholder="Name ">
                </div>
                <div class="m-4 mx-2">
                    <input type="text" name="txtemail" class="form-control" placeholder="Email-Id">
                </div>
                <div class="m-4 mx-2">
                   <input type="password" name="txtpassword" class="form-control" placeholder="Password">
                </div>
                <div class="m-4 mx-2">
                   <input type="password" name="txtrepassword" class="form-control" placeholder="Confirm-Password">
                </div>
                <div class="m-4 mx-2">
                    <input type="File" name="txtpic" class="form-control">
                </div>                
                <button type="submit"  name="btnregister" class="btn btn-success mt-4 mb-4 mx-3 px-4" >Register</button>
            </div>
        </form>