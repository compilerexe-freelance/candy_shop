<meta http-equiv="content-type" content="text/html; charset=utf-8"></meta>
<?php
	require('config.php');

	$title = $_POST['txt_title'];
	$detail = $_POST['txt_detail'];
	$price = $_POST['txt_price'];

	if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"],"myfile/".$_FILES["fileUpload"]["name"])) {
		if ($title == "" || $detail == "") {
			header("location: http://localhost/admin.php");
		} else if ($price == "") {
			header("location: http://localhost/admin.php");
		} else {
			// Create connection
			$conn = new mysqli($servername, $db_user, $db_pass, $db_name);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}

			$sql = "INSERT INTO tb_items (title, image, detail, price)
			VALUES ('$title', '".$_FILES['fileUpload']['name']."', '$detail', '$price')";

			if ($conn->query($sql) === TRUE) {
				echo "<form action='FormAddItem.php'>";
			    echo "<p style='font-size: 18px;'>เพิ่มสินค้าสำเร็จ</p>";
			    echo "<br /><br />";
			    echo "<button style='width: 205px; height: 35px; font-size: 16px;'>กลับสู่หน้าเพิ่มสินค้า</button>";
			    echo "</form>";
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();
		}
	}
?>