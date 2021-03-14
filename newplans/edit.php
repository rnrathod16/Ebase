
<?php include('../header.php');?>



<?php

require('db.php');

$id=$_REQUEST['id'];
$query = "SELECT * from new_record where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Plans</title>
<link rel="stylesheet" href="../newplans/style.css" />
</head>
<body>
<div class="form">

<pre>              </pre>
<pre>              </pre>
<h1>Update Plan</h1>


<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$trn_date = date("Y-m-d H:i:s");
$name =$_REQUEST['name'];
$plan = $_REQUEST['plan'];
$amount = $_REQUEST['amount'];
$specs = $_REQUEST['specs'];
$duration = $_REQUEST['duration'];

$update="update new_record set trn_date='".$trn_date."', name='".$name."', plan='".$plan."',amount='".$amount."',specs='".$specs."', duration='".$duration."' where id='".$id."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Plan Updated Successfully. </br></br><a href='view.php'>View Updated plans</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="name" placeholder="Enter Plan Name" required value="<?php echo $row['name'];?>" /></p>
<p><input type="text" name="plan" placeholder="Enter Plan Description" required value="<?php echo $row['plan'];?>" /></p>
<p><input type="text" name="amount" placeholder="Enter Amount" required value="<?php echo $row['amount'];?>" /></p>
<p><input<textarea class="form-control"type="text" name="specs"style="height: 100px" id="floatingTextarea2"  placeholder="Enter Plan Specifications" required value="<?php echo $row['specs'];?>" /></p></textarea>
<p><input type="text" name="duration" placeholder="Enter Plan Duration " required value="<?php echo $row['duration'];?>" /></p>

<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>


</div>
</div>
</body>
</html>
