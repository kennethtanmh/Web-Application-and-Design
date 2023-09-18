<!DOCTYPE html>
<html>
<body>

<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname">
<input type="submit">
</form>

<!-- 
a simple web page with a form that allows the user to enter their name and submit it using the "GET" method. -->
<?php 
$name = $_REQUEST['fname'];
if (($name) != '')echo "<br> Text string submitted: ".$name; 
?>

</body>
</html>