<?php

if (!empty($_GET['pagina'])) {
	$pagina = $_GET['pagina'];

	switch ($pagina) {
		case 'grafica-1':
			include 'dashboard/graf-1.php';
			break;
		case 'grafica-2':
			include 'dashboard/graf-2.php';
			break;
		case 'grafica-3':
			include 'dashboard/graf-3.php';
			break;
		case 'grafica-4':
			include 'dashboard/graf-4.php';
			break;
		default:
			break;
	}
}