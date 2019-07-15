<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Danh sách user</title>
    </head>
    <body>
        <?php
        require_once '../baitap1/connectDB.php';
        ?>
        <table border="1" cellspacing="0" cellpadding="2">
            <thead>
                <tr>
                	<th>STT</th>
                    <th>UserName</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php
                $stt = 1;
                $query = "SELECT * FROM tblusers";
                $result = mysqli_query($con, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <th scope="row"> <?php echo $stt++ ?></th>
                        <td><?php echo $row["UserName"]; ?></td>
                        <td><?php echo $row["Address"]; ?></td>
                        <td><?php echo $row["Email"]; ?></td>
                        <td style="display: flex;">
                        	
							<form action="update_user.php" method="post" style="margin-right: 10px;">
								<button name="update" value="<?php echo $row["Id"]; ?>">Update</button>
							</form>
							<form action="delete_user.php" method="post" >
								<button name="delete" value="<?php echo $row["Id"]; ?>">Delete</button>
							</form>
                            <!-- <a href="update_user.php?id=<?php echo $row["Id"]; ?>">Update</a>
                            <a href="server.php.php?id=<?php echo $row["Id"]; ?>">Delete</a> -->
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
	
    </body>
</html>