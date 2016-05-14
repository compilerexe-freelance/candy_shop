<?php
	require('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"></meta>
	<title>ขายขนมออนไลน์</title>
</head>
<body>
	<?php
		$id = $_GET["id"];
		$conn = new mysqli($servername, $db_user, $db_pass, $db_name);
		
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT * FROM tb_items WHERE id=$id";
		if ($result = mysqli_query($conn,$sql)) {
		  	// echo "<div class='item' style='border: 1px solid red;'>";
			while ($row = mysqli_fetch_array($result)) {
				echo "<div class='col-md-4'>";
				echo "<p style='font-size: 22px; color: blue; font-weight: bold;'>".$row["title"]."</p>";
		    	echo "<img src='myfile/".$row["image"]."' class='item' onclick='image".$row["id"]."(this)'";
		    	echo "<br />";
		    	echo "<p style='font-size: 18px; color: green;'>รายละเอียด</p>";
		    	echo "<p>".$row["detail"]."</p>";
		    	echo "<p style='color: green;'>ราคา ".$row["price"]."</p>";
		    	echo "</div>";
		    	echo "
				<script type='text/javascript'>
					function image".$row["id"]."(img) {
					    window.open('viewitem.php?id=".$row["id"]."');
					}
				</script>
				";
			}
			
			mysqli_free_result($result);
		}

		$conn->close();
	?>
</body>
</html>