<html>
<head>
	<link href="css/bootstrap.min.css" rel="stylesheet"> 
	<style type="text/css">
		.blkg{
			background-color: lavender;
		} 
	</style>
</head>
<body align=center> 
	<h1>
		<b>
			TOKO
		</b>
	</h1>
	<br>
	<div class="col-lg-4 col-lg-offset-4 blkg">
		<?php
		$SERVER = "localhost";
		$DATABASE = "pkl";
		$USER = "root";
		$PASS = "";

		$conn = mysqli_connect($SERVER, $USER, $PASS, $DATABASE);

		$barang= $_POST["barang"];
		$jumlah= $_POST["jumlah"];
		$query = "INSERT INTO pesan (nama,jumlah) 
		VALUES (\"$barang\", \"$jumlah\")";
		$result = mysqli_query($conn, $query);

		$query2 = "SELECT * from pesan";
		$result2 = mysqli_query($conn, $query2);
		$a2 = mysqli_num_rows($result2);

		for($x=1;$x<=$a2;$x++)
		{
			$row = mysqli_fetch_assoc($result2);
			$nama[$x] = $row['nama'];
			$jumlah[$x] = $row['jumlah'];
		}

		if ($query) 
		{
			echo "INVOICE";
			echo "<br>
			<table border=1>
				<tr>
					<th>Nama Barang</th>
					<th>Jumlah</th>
				</tr>";
				for($x=1;$x<=$a2;$x++)
				{
					echo "<tr>";
					echo "<td>".$nama[$x]."</td>";
					echo "<td>".$jumlah[$x]."</td>";
					echo "</tr>";
				}
				echo "</table>Order lagi <a href=\"task2\">disini</a>";
			} 
			else 
			{
				echo "Order gagal!!";  
				echo "<br>Kembali ke <a href=\"task2\">menu order</a>";
			}
			?>
		</body>
		</html>