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
		
		<p style="color:blue; font-weight:bold; font-size:20px;">ระบบเพิ่มสินค้า</p>
		<hr size="1">
		<form method="POST" action="add_item.php" enctype="multipart/form-data">
			<p>ชื่อสินค้า</p>
			<input type="text" name="txt_title" maxlength="20">
			<p>รูปภาพ</p>
			<input type="file" name="fileUpload">
			<p>รายละเอียดสินค้า</p>
			<textarea name="txt_detail" rows="10" cols="21" maxlength="255"></textarea>
			<p>ราคา (ตัวอย่าง 100 บาท)</p>
			<input type="text" name="txt_price" maxlength="20">
			<br /><br />
			<button type="submit" style="width: 255px; height: 35px; font-size: 16px;">เพิ่มสินค้า</button>
		</form>
		<br />
		<form action="admin.php">
			<button type="submit" style="width: 255px; height: 35px; font-size: 16px; background-color: #abc;">ย้อนกลับเมนูจัดการระบบ</button>
		</form>

	</div>
</body>
</html>