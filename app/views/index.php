<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Menu Cloud</title>

	<base href="/">

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<style>
		body 		{ padding-top:50px; }
	</style>

	<!-- JS -->
	<script src="js/libs/jquery.js"></script>
 
		<!-- ANGULAR -->
		<script src="js/libs/angular.js"></script>
		<script src="js/libs/angular-route.js"></script>
		
		<script src="js/services/comment.js"></script> <!-- ANGULAR SERVICE -->	
		<script src="js/controllers/main.js"></script> <!-- ANGULAR CONTROLLER -->		
		<script src="js/app.js"></script> <!-- ANGULAR APP -->

</head>
<body ng-app="cometApp">
<div class="col-sm-6 col-sm-offset-3">

	<div class="page-header">
		<h1>Laravel and Angular Single Page App<br>
			<small>Commenting System</small>
		</h1>
	</div>

	<div id="main">
		<div ng-view></div>
	</div>

</div>
</body>
</html>

