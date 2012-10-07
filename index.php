<?php
include("top.php");
$sql="select * from `test` where `testid`='1'";
$result=mysql_query($sql);
$row = mysql_fetch_array($result);
echo '<div class="test">'.$row['title'].'</div><br />';
echo $row['text'];
include("footer.php");
?>

