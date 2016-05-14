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
		<ul>
			<p>เมนูจัดการระบบ</p>
			<li><a href="FormAddItem.php">ระบบเพิ่มสินค้า</a></li>
			<li><a href="FormEditItem.php">ระบบแก้ไขสินค้า</a></li>
			<li><a href="FormDeleteItem.php">ระบบลบสินค้า</a></li>
		</ul>
	</div>
</body>
</html>