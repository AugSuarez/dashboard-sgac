<!DOCTYPE html>
<?php
include 'dash-proceso.php';
?>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Dashboard</title>
		<link rel="stylesheet" href="../controlador/css/dashboard.css">
		<script src="../lib/js/jquery-2.2.2.min.js"></script>
	</head>
	<body>
		<nav class="menu-bar">
			<span class="logo">&#9881</span>
			<h1 class="heading">DASHBOARD</h1>
		</nav>
		<div class="container">
			<ul class="dashboard-list">
				<li class="list-item"></li>
				<li class="list-item">
					<a class="switch-link" data-num="1"> <!-- href="?pagina=grafica-1"> -->
						&#9881
					</a>
				</li>				
				<li class="list-item">
					<a class="switch-link" data-num="2"> <!-- href="?pagina=grafica-2"> -->
						&#9881
					</a>
				</li>				
				<li class="list-item">
					<a class="switch-link" data-num="3"> <!-- href="?pagina=grafica-3"> -->
						&#9881
					</a>
				</li>				
				<li class="list-item">
					<a class="switch-link" data-num="4"> <!-- href="?pagina=grafica-4"> -->
						&#9881
					</a>
				</li>				
			</ul>	
			<div class="content">
				<?php
					if (empty($_GET['pagina'])) {
						include 'dashboard/graf-1.php';
					}
				?>
			</div>	
		</div>
	<script type="text/javascript">
	//highlight selected list item
		$('.switch-link').click(function(){

			$(this).parent().siblings().toggleClass("highlight", false);
			$(this).parent().toggleClass("highlight");

			var num = Number($(this).attr("data-num"));

			$.get("dash-proceso.php?pagina=grafica-" + num, function(response){
				$('.content').html(response);
			})
		});
	</script>
		
	</body>
</html>