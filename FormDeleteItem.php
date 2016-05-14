<?php
	require('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"></meta>
	<title>ผู้ดูแลระบบ</title>
	<style type="text/css">
		body {
			background-color: #ffffe6;
		}

		.container {
			width: 1024px;
			height: 768px;
			/*border: 1px solid #abc;*/
			padding: 0;
			margin: 0 auto;
		}

		table tr th {
			text-align: center;
		}

		table tr td {
			text-align: center;
		}

		p {
			font-size: 18px;
		}

	</style>
</head>
<body>
	<div class="container">
		
		<p style="color:blue; font-weight:bold; font-size:20px;">ระบบลบสินค้า</p>
		<hr size="1">
		<table border="1">
			<tr>
				<th>รหัสสินค้า</th>
				<th>ชื่อสินค้า</th>
				<th>รูปภาพ</th>
				<th>รายละเอียด</th>
				<th>ราคา</th>
				<th></th>
			</tr>
			<tr>
				<?php
					// Create connection
					$conn = new mysqli($servername, $db_user, $db_pass, $db_name);
					// Check connection
					if ($conn->connect_error) {
					    die("Connection failed: " . $conn->connect_error);
					}

					$sql = "SELECT * FROM tb_items";

					if ($result = mysqli_query($conn,$sql)) {
				  
						while ($row = mysqli_fetch_array($result)) {
							echo "<tr>";
							echo "<td>".$row["id"]."</td>";
							echo "<td>".$row["title"]."</td>";
							echo "<td> <img style='width: 100px; height: 100px;' src='myfile/".$row["image"]."'></img></td>";
							echo "<td>".$row["detail"]."</td>";
							echo "<td>".$row["price"]."</td>";
							echo "<td><a href='FormDeleteItemById.php?id=".$row["id"]."'>ลบ</a></td>";
							echo "</tr>";
						}

						mysqli_free_result($result);
					}

					$conn->close();
				?>
			</tr>
		</table>

		<br />
		<form action="admin.php">
			<button type="submit" style="width: 255px; height: 35px; font-size: 16px; background-color: #abc;">ย้อนกลับเมนูจัดการระบบ</button>
		</form>
		
	</div>
</body>
</html>