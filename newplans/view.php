<?php include('../header.php');?>


<?php

 
require('db.php');

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Plans</title>
<link rel="stylesheet" href="/style.css" />
</head>
<body>
<div class="form">
<pre>              </pre>
<pre>              </pre>


<section class="text-center">
<h2>Existing Plans</h2>
<div class="container">
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr><th>S.No</th><th>Plan Name</th><th>Plan Discription</th><th>Amount</th><th>Specifications</th><th>Duration</th><th>Edit</th><th>Delete</th></tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from new_record ORDER BY id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td><td align="center"><?php echo $row["name"]; ?></td><td align="center"><?php echo $row["plan"]; ?></td><td align="center"><?php echo $row["amount"]; ?></td><td align="center"><?php echo $row["specs"]; ?></td><td align="center"><?php echo $row["duration"]; ?></td><td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td><td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td></tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
          
          </section>

</div>
</body>
</html>
