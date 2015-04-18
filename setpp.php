<?php
session_start();
if($_SESSION['username']){
?>
<html>

</html>
<?php
}
else
{
header ("location:index.php");
}
?>