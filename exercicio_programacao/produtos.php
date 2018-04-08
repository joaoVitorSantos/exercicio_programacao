<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php



		if (isset ($_GET['categoria'])) {
			$texto = $_GET['categoria'];

			echo $texto;
		}elseif (isset($_POST['busca'])) {
			$texto2 = $_POST['busca'];

			echo $texto2;
		}

	?>


	



</body>
</html>