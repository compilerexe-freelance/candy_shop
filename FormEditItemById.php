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

		input {
			width: 250px;
			height: 20px;
			font-size: 18px;
		}

		p {
			font-size: 18px;
		}

		textarea {
			font-size: 18px;
		}

	</style>
</head>
<body>
	<div class="container">
		
		<p style="color:blue; font-weight:bold; font-size:20px;">ระบบแก้ไขสินค้า</p>
		<hr size="1">
		<table border="1">
			<tr>
				<th>ชื่อสินค้า</th>
				<th>รูปภาพ</th>
				<th>รายละเอียด</th>
				<th>ราคา</th>
				<th></th>
			</tr>
			<tr>
				<?php
					$myId = $_GET["id"]; 
					// Create connection
					$conn = new mysqli($servername, $db_user, $db_pass, $db_name);
					// Check connection
					if ($conn->connect_error) {
					    die("Connection failed: " . $conn->connect_error);
					}

					$sql = "SELECT * FROM tb_items WHERE id='$myId'";

					if ($result = mysqli_query($conn,$sql)) {
				  
						while ($row = mysqli_fetch_array($result)) {
							echo "<tr>";
							echo "<form method='POST' action='edit_item.php'>";
							echo "<input type='hidden' name='id' value='".$row["id"]."' />";
							echo "<td><input type='text' name='title' value='".$row["title"]."' /></td>";
							echo "<td> <img style='width: 250px; height: 210px;' src='myfile/".$row["image"]."'></img></td>";
							echo "<td><textarea name='detail' rows='10' cols='21' maxlength='255'>".$row["detail"]."</textarea>";
							echo "<td><input type='text' name='price' value='".$row["price"]."' /></td>";
							echo "<td><button type='submit'>บันทึก</button></td>";
							echo "</form>";
							echo "</tr>";
						}

						mysqli_free_result($result);
					}

					$conn->close();
				?>
			</tr>
		</table>

		<br />
		<form action="FormEditItem.php">
			<button type="submit" style="width: 255px; height: 35px; font-size: 16px; background-color: #abc;">ย้อนกลับเมนูแก้ไขสินค้า</button>
		</form>
		<br />

	</div>
</body>
</html>