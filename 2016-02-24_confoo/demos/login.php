<?php
header("Content-Security-Policy: default-src 'self'");
?>

<html>
<head>
<title>Login</title>
</head>

<center>

<div style="color:red">
<?php echo $_GET['errorMsg'] ?>
</div>

<form action="auth.php" method="POST">
<table>
<tr><td>User :     </td> <td><input type="text" name="user"></td></tr>
<tr><td>Password : </td> <td><input type="password" name="password"></td></tr>

</table>

<input type="submit" value="Login">
</form>


</center>

</body>
</html>