<?php
$userId = htmlentities($_GET['userId']); 
?>

<form action="">
<input type="hidden" id="userId" name="userId" value="<?php echo $userId;?>" >
</form>

<div id="preview">
    
</div>

<script>
console.info(document.getElementById("userId").value);
document.getElementById("preview").innerHTML = "Hello "+document.getElementById("userId").value;
</script>

<!-- http://localhost/demo-confoo/chrome-xss-dom.php?userId=111%3Cimg%20src=xxx%20onerror=alert(1)%3E -->