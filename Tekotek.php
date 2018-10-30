<!DOCTYPE html>
<html>
<head>
	<title>Tugas Tekotek</title>

</head>
<body>
	<?php
		echo "<span style='font-family: Helvetica'>Tekotek-kotek kotek anak ayam turun 100</span>";

		echo "<br>";
		for ($i=99;$i>=1;$i--) {
			if ($i % 2 == 0) {
				echo "<span style='color:brown; font-family: Helvetica'>Mati Satu Tinggal $i</span><br>";
			} 
			else {
				echo "<span style='color:orange; font-family: Helvetica'>Mati Satu Tinggal $i</span><br>";
			}
			
		}
	?>
</body>
</html>