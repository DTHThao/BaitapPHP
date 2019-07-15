<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Danh sách user</title>
    </head>
    <body>
		<h3>Thêm mới User</h3>
        <div>
        	 <form action="server.php" method="post">
            <div>
                <div>UserName:</div>
                <input type="text" name="userName"required/>
            </div>

             <div>
                <div>Address:</div>
                <input type="text" name="address" required/>
            </div>

            <div>
                <div>Email:</div>
                <input type="email" name="email" required/>
            </div>
            <input type="submit" name = "insert" value="Insert" style="margin-top: 10px;">
    </form>
        </div>
    </body>
</html>