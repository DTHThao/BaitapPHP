<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Xóa user</title>
</head>
<body>
	<?php
		if (isset($_POST['delete'])) {
			$id = $_POST['delete'];
		}
	?>

	<div>Bạn có muốn xóa không?</div>
	<div style="display: flex;">
		<form action="server.php" method="post" style="margin-right: 10px;">
			<button name="acceptDelete" value="<?php echo $id ?>">Accept</button>
		</form>
		<a href="list_users.php"><button>Cancel</button></a>
	</div>
</body>
</html>