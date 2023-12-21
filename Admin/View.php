<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<form method="post" enctype="multipart/form-data">

    <div class="box mx-5 mt-3">
        <table class="table table-bordered">
                        <thead>
                            <tr class="table-dark">
                                <th colspan="8">
                                    <div class="head">
                                        <h5 align=center>Employee😊</h5>
                                   </div>
                                </th>
                            </tr>
                            <tr class="table-light text-center">
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Photo</th>
                                <th>Permission</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                        
                            <?php
                                $con=mysqli_connect("localhost","root","","bca5");
                                $qry=mysqli_query($con,"select * from employee");
                                $i=0;
                                while($row=mysqli_fetch_array($qry)){
                                    $i++;
                                    ?>
                                <tr>
                                    <td><?php echo $i;?></td>
                                    <td><?php echo $row[1]; ?></td>
                                    <td><?php echo $row[2]; ?></td>
                                    <td><?php echo $row[3]; ?></td>
                                    <td><img src='../User/images/<?php echo $row[4]?>' height=50 width=50 ></td>
                                    <td><?php 
                                        $r=$row[5];
                                        if($r==0){ ?>
                                            <a href="Update.php?id1=<?php echo $row[0]?>" class="btn btn-danger" >Not Approved</a> 
                                            <?php } else {?>
                                            <a href="Update.php?id2=<?php echo $row[0]?>" class="btn btn-Success mx-1" >  Approved  </a>    
                                            <?php } ?>
                                        </td>
                                    </tr>
                                    <?php }?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </form>