<?php
session_start();
include "connection.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<div class="faheem"> 
<?php
$cid = $_GET['id'];
echo $cid;
$q = mysqli_query($con,"select * from sms_class where class_id = $cid");
    echo "<option value='2'>Select fees</option>";
     while($r = mysqli_fetch_array($q))
      {
      echo "<option>$r[2]</option>";
     }
 
?>

</div>
</body>
</html>

