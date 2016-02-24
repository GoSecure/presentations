<?php
$userId = $_GET['userId']; 
?>
<html>

<form action="">
<input type="hidden" id="userId" name="userId" value="<?php echo $userId;?>" >
</form>

<div id="preview">
    
</div>

<script>
console.info(document.getElementById("userId").value);
document.write("Hello "+document.getElementById("userId").value);
</script>

</html>