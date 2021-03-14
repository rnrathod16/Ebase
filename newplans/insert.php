

<?php include('../header.php');?>


<?php

require('db.php');


$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$trn_date = date("Y-m-d H:i:s");
$name =$_REQUEST['name'];
$plan = $_REQUEST['plan'];
$amount = $_REQUEST['amount'];
$specs = $_REQUEST['specs'];
$duration = $_REQUEST['duration'];
$offer = $_REQUEST['offer'];
    
$ins_query="insert into new_record (`trn_date`, `name`, `plan`, `amount`, `specs`, `duration`, `offer`) VALUES ('$trn_date', '$name', '$plan', '$amount', '$specs', '$duration', '$offer')";
mysqli_query($con,$ins_query) or die(mysql_error());
$status = "New Plan Inserted Successfully.</br></br><a href='view.php'>View Inserted Record</a>";
}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New plan</title>
<link rel="stylesheet" href="../newplans/style.css" />
</head>
<body>
<div class="form">

<pre>              </pre>
<pre>              </pre>
<div>
<h4>Insert New plan</h4>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="name" placeholder="Enter Plan Name" required /></p>
<p><input type="text" name="plan" placeholder="Enter Plan Description" required /></p>
<p><input type="text" name="amount" placeholder="Enter Amount" required /></p>
<textarea class="form-control" name="specs" placeholder="Enter Plan Specifications" id="floatingTextarea2" style="height: 100px"></textarea>
<p><input type="text" name="duration" placeholder="Enter Plan Duration " required /></p>
<p><input type="text" name="offer" placeholder="Enter Special Offer (if any) " required /></p>

<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>

<br /><br /><br /><br />
<a href="../newplans/view.php">view uploaded plans</a></a>
</div>
</div>
</body>
</html>
