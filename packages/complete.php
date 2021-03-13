<?php
 include '../uploads/completeUpload/filesLogic.php';
session_start();

        if(!isset($_SESSION['login'])){
            // header("location:../index.php");
            echo "<script>window.location.href='../index.php'</script>";
        }
        else{
          if($_SERVER['REQUEST_METHOD']=='POST'){
  
            session_unset();
            session_destroy();
            
            // echo "<script>alert('You are successfully Logged Out');</script>";
            $message= urlencode("loggedout");
            // header("location:../index.php?message".$message);
            echo "<script>window.location.href='../index.php'</script>";

            
            
            }
    }



?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>STarter</title>
  
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
        <a href="#" class="navbar-brand d-flex align-items-center">
            <strong>Hii <?php echo $_SESSION['username'];?></strong>
            
          </a>
          <a href="#" class="navbar-brand d-flex align-items-center">
            <strong>Welcome To Complete Pack</strong>
          </a>
        
                <form method="post">
                    <button name="logout" class="btn btn-danger my-2">Logout</button>
                    <a class="btn btn-primary" href="index.php" role="button">Home</a>
                </form>
            </div>
        </div>
      </div>

    <div class="container-md" style="overflow-x:auto;">
    <table class="table table-striped">
  <thead>
  <tr>
      <th scope="col">Sr.No.</th>
      <th scope="col">File Name</th>
      <th scope="col">Size</th>
      <th scope="col">Downloads</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   <?php
  
  include "../loginsystem/partials/dbconnect.php";

  $register=$_SESSION['time'];
  $memberEnds= date("y-m-d", strtotime(date("y-m-d",strtotime($register))." + 30 day"));
  $m = date("d", strtotime(date("d",strtotime($register))." + 30 day"));
  
  $p= date("y-m-d", strtotime(date("y-m-d",strtotime($register))." + 0 day"));
  
  
  // echo  date("d")+3;
  
  $v= (date("d")+30)-(date("d")+1);

  if(date("y-m-d")<$memberEnds){
    
  echo "<h2 class='center container my-4'>Your Membership will Expire in ".$v." days.</h2>" ;

    $sql="SELECT * FROM `completeUpload`";

  $result=mysqli_query($con,$sql);
  
  if($result){
      
  $num=mysqli_num_rows($result);
  $no=1;
      
          if($num > 0){ //this is to catch unknown error.
            while($fet=mysqli_fetch_assoc($result)){
              
     echo ' <tr>
    <td>'.$no.'</td>
      <td>'.$fet['name'].'</td>
      <td>'.($fet['size'] / 1000) . ' KB'.'</td>
      <td>'.$fet['downloads'].'</td>
      <td><a href="../uploads/starterUpload/downloads.php?file_id='.$fet['id'].'">Download</a></td>
      </tr> ';
        $no++;
    }
  }
  }

  }
  else{
    echo "<h2 class='center container my-4'>Membership Expired</h2>" ;
  }
  
  
    
  

  
  ?>
  </tbody>
</table>
</div>

   
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

   
  </body>
</html>


