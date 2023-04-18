<!DOCTYPE html>
<html lang="en">
<head>
    <style>         
        table, tr, td{             
            border: solid 1px black;
            border-collapse: collapse;             
            padding: 7px;             
            text-align: center;         
        }     
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 4-Nomor 1</title>
</head>
<body>
<form method="POST">
		<label for="panjang">Panjang :</label>
		<input type="number" name="panjang" id="panjang"><br>
		<label for="lebar">Lebar :</label>
		<input type="number" name="lebar" id="lebar"><br>
		<label for="nilai">Nilai :</label>
		<input type="text" name="nilai" id="nilai"><br>
		<input type="submit" value="Cetak">
	</form>
    <?php
	if (isset($_POST['panjang']) && isset($_POST['lebar']) && isset($_POST['nilai'])) {
		$panjang = $_POST['panjang'];
		$lebar = $_POST['lebar'];
		$nilai = $_POST['nilai'];
		$nilai_array = explode(" ", $nilai);
		$nilai_array = array_map('intval', $nilai_array);
		if (count($nilai_array) != $panjang * $lebar) {
			echo "Panjang nilai tidak sesuai dengan ukuran matriks";
		} else {
			$matriks = array();
			for ($i = 0; $i < $panjang; $i++) {
				$matriks[$i] = array();
				for ($j = 0; $j < $lebar; $j++) {
					$matriks[$i][$j] = $nilai_array[$i*$lebar+$j];
				}
			}
			echo "<table border='1'>";
			for ($i = 0; $i < $panjang; $i++) {
				echo "<tr>";
				for ($j = 0; $j < $lebar; $j++) {
					echo "<td>" . $matriks[$i][$j] . "</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
		}
	}
	?>
</body>
</html>