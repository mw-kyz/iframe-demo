<?php
	if(isset($_POST['codes'])){
		$codes = $_POST['codes'];
	}else {
		$codes = 'document.write("欢迎使用在线代码编辑器")';
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Result</title>
</head>
<body>
	<script type="text/javascript">
		<?php echo $codes ?>
	</script>
</body>
</html>