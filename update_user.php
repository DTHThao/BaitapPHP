<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update</title>
</head>
<body>
	<?php
		require_once '../baitap1/connectDB.php';
		$id = $_POST["update"];
		$query = "SELECT * FROM tblusers WHERE Id = $id";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($result);
	?>

	 <form action="server.php" method="post">
	 		 <div>
                <div>ID:</div>
                <input type="text" name="id" value="<?php echo $row["Id"] ?>" readonly="readonly" style="background-color: rgb(235, 235, 228);">
            </div>
            <div>
                <div>UserName:</div>
                <input type="text" name="userName" value="<?php echo $row["UserName"] ?>" required/>
            </div>

             <div>
                <div>Address:</div>
                <input type="text" name="address" value="<?php echo $row["Address"] ?>" required/>
            </div>

            <div>
                <div>Email:</div>
                <input type="email" name="email" value="<?php echo $row["Email"] ?>" required/>
            </div>
            <input type="submit" name = "update" value="Update" style="margin-top: 10px;">
    </form>
</body>
</html>