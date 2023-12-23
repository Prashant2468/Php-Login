<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php

$con=mysqli_connect("localhost","root","","bca5");
if(isset($_COOKIE['email']) && isset($_COOKIE['pass'])){
    $email=$_COOKIE['email'];
    $pass=$_COOKIE['pass'];
}else{
    $email=$pass="";
}
if(isset($_POST['btnlogin'])){
    $email=$_POST['txtemail'];
    $password=$_POST['txtpassword'];
    $q=mysqli_query($con,"select * from employee where email='$email' and password='$password' and status=0");
    // echo "select * from employee where email=$email and password=$password and status=0";
    $cnt=mysqli_num_rows($q);
    echo "total records are : $cnt";
    if($cnt>0){
        $c=$_POST["chkbox"];
        if($c){
            setcookie('email',$_POST['txtemail'],time()+100);
            setcookie('pass',$_POST['txtpassword'],time()+100);
        }
        if($q){
            header("location:Uhome.php");
        }else{
            echo "Not Login";
        }
    }
}
?>
<style>
    .box{
        height: 100%;
        width: 100%;
        background-color:rgba(120   , 1502, 100);
        display:flex;
        justify-content:center;
        align-items:center;
    }
    .Container{
        height: 300px;
        width:500px;
        padding:20px;
        background-color: rgba(1200, 1502, 100);
        border-radius:15px;
        } 
</style>
<form method="POST">
    <div class="box">
    <center>

        <div class="Container mx-2">
            <div class="m-4 mx-2">
                <input type="text" name="txtemail" class="form-control" placeholder="Email-Id " value="<?php echo $email?>">
            </div>
                <div class="m-4 mx-2">
                    <input type="password" name="txtpassword" class="form-control" placeholder="Password" value="<?php echo $email?>">
                    <input type="checkbox" name="chkbox">Remember me
                </div>
                <button type="submit"  name="btnlogin" class="btn btn-success mt-4 mb-4 mx-3 px-4" >Login</button>
            </div>
    </div>
</from>