<meta http-equiv="content-type" content="text/html; charset=utf-8"></meta>
<?php
	require('config.php');

	$id 	= $_GET['id'];

	// Create connection
	$conn = new mysqli($servername, $db_user, $db_pass, $db_name);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$sql = "DELETE FROM tb_items WHERE id=$id";

	if ($conn->query($sql) === TRUE) {
		echo "<form action='FormDeleteItem.php'>";
	    echo "<p style='font-size: 18px;'>ลบสินค้าสำเร็จ</p>";
	    echo "<br /><br />";
	    echo "<button style='width: 205px; height: 35px; font-size: 16px;'>กลับสู่หน้าลบสินค้า</button>";
	    echo "</form>";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	
?>