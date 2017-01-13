<html>
<head>
	<link href="css/bootstrap.min.css" rel="stylesheet"> 
	<style type="text/css">
		.blkg{
			background-color: lavender;
		} 
	</style>
</head>
<body align=center style="background-image:url(bg.jpg);background-repeat: no-repeat;background-size: 1366px 768px;">
	<h1>
		<b>ITEM</b>
	</h1>
	<br>
	<div class="col-lg-4 col-lg-offset-4 blkg">
		<b>Input Item</b>
	</div>
	<form method="post" action="phalo_juga">
		<table>
			<tr>
				<td>Nama</td>
				<td>Harga</td>
				<td>Jumlah</td>
				<td>Diskon</td>
			</tr>

			<?php
			$y=1;
			for($x=1;$x<=5;$x++)
			{
				echo "<tr>
				<td><input type=\"text\" name=\"nama[$x][$y]\"></td>
				<td><input type=\"text\" name=\"harga[$x][$y]\"></td>
				<td><input type=\"text\" name=\"jumlah[$x][$y]\"></td>
				<td><input type=\"text\" name=\"diskon[$x][$y]\"></td>
			</tr>";
			$y++;
		}
		?>
		
	</table>
	<button class="btn btn-primary" type="submit">Confirm</button>
	<button class="btn btn-default" type="reset">Clear</button>
</form>
<a href="uasmenu.php"><button class="btn btn-default" >Back</button></a>
</body>
</html>