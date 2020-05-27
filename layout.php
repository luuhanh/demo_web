
<!doctype html>
<html>
<head>
        <title>THẾ giới Mobile</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link href="./Public/css/style.css" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<body>
	<div class="container-fluid">
	<?php
	require_once './Layout/Menu.php';
	require_once './Layout/Slide.php';

	
	?>
	
		<div class="row">
			<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
				<?php
				require_once $VIEWNAME;
				?>
			</div>
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				<?php
				if(!isset($_SESSION['user'])){
				require_once './Layout/Formlogin.php';
				} else {
				require_once './Layout/Loginsuccess.php';
				}
				?>
				<?php
				require_once './Layout/Catelogies.php';
				?>
				
			</div>
	
			
		</div>
		<?php
		require_once './Layout/Footer.php';
		?>
	</div>

</body>
</html>

