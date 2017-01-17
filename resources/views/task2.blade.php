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
		<b>TOKO</b>
	</h1>
	<br>
	<div class="col-lg-4 col-lg-offset-4 blkg">
		<b>Pesan Barang</b>
	</div>
		<form method="post" action="ptask2">
			<br>
			<br>
			Barang yang dibeli
			<br>
			<input type="text" name="barang">
			<br>
			Jumlah
			<br>
			<input type="text" name="jumlah">
			<br>
			<br>
			<button class="btn btn-primary" type="submit">Pesan Barang</button>
			<button class="btn btn-default" type="reset">Clear</button>
		</form>
</body>
</html>