<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Server</title>
</head>
<body>
	<?php
		require_once '../baitap1/connectDB.php';
		//Thêm mới 1 user vào db

		if (isset($_POST['update']) || isset($_POST['insert'])) {
			
			if ($_POST["userName"] != "") {
				$userName = $_POST["userName"];
			} else {
				$userName = "Không xác định";
			}
			if ($_POST["address"] != "") {
				$address = $_POST["address"];
			} else {
				$address = "Không xác định";
			}
			if ($_POST["email"] != "") {
				$email = $_POST["email"];
			} else {
				$email = "Không xác định";
			}

			if($_POST['insert']){
				$query = "INSERT INTO tblusers VALUES (NULL,'$userName','$address','$email')";
				$msg = "Thêm mới";
			}
			if($_POST['update']){
				$id = $_POST['id'];
				$query = "UPDATE tblusers SET UserName = '$userName', Address = '$address', Email = '$email' WHERE Id = '$id'";
				$msg = "Update";
			}
			$result = mysqli_query($con, $query);
			if($result > 0){
				// echo("Update thành công!");
				echo "<script type='text/javascript'>
						alert('$msg thành công.');
						window.location.replace('list_users.php');
					</script>";
				// header('Location: index.php');

			}else{
				echo "<script type='text/javascript'>
						alert('$msg thất bại');
						window.location.replace('list_users.php');
					</script>";
			}
		}

		if (isset($_POST['acceptDelete'])) {
			$id = $_POST['acceptDelete'];
			$query = "DELETE FROM tblusers WHERE Id = '$id'";
			$result = mysqli_query($con, $query);
			if($result > 0){
				// echo("Update thành công!");
				echo "<script type='text/javascript'>
						alert('Xóa thành công');
						window.location.replace('list_users.php');
					</script>";
				// header('Location: index.php');

			}else{
				echo "<script type='text/javascript'>
						alert('Xóa thất bại');
						window.location.replace('list_users.php');
					</script>";
			}
		}
	?>

	<a href="index.php">Quay về trang chủ</a>
</body>
</html>