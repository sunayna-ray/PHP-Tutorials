<html><body>
<?php
if(1!=1){
?>
None set<br>
<?php }else{
?>
All set<br>
User: <?php if (isset($_COOKIE["sunayna"]))echo $_COOKIE["sunayna"];
else echo "No";
?>
<?php }
?>
</body></html>