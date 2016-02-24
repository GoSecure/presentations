<?php
header("X-XSS-Protection: 1");
$userId = $_GET['userId']; 
?>

<form action="">
User ID : <input type="text" id="userId" name="userId" value="<?php echo $userId;?>" >
</form>