<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel and Angular Comment System</title>

	<!-- CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
	<style>
		body 	{ padding-top:30px; }
	</style>

	<!-- JS -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script>

	<!-- ANGULAR -->
	<!-- all angular resources will be loaded from the /public folder -->
		<script src="js/controllers/main.js"></script> <!-- load our controller -->
		<script src="js/services/comment.js"></script> <!-- load our service -->
		<script src="js/app.js"></script> <!-- load our application -->

</head>
<!-- declare our angular app and controller -->
<body class="container" ng-app="commentApp" ng-controller="mainController">
	<div class="col-sm-8">

		<h2>Laravel and Angular Single Page Application</h2>
		<h4>Commenting System</h4>
			
		<!-- THE COMMENTS -->
		<div class="well well-lg">
			
			<!-- INPUT FORM -->
			<form class="form-inline row" ng-submit="submitComment()">
				<div class="col-sm-4">
					<input type="text" class="form-control" name="author" ng-model="newComment.author" placeholder="Your Name">
				</div>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="comment" ng-model="newComment.text" placeholder="Type your comment here...">
				</div>
				<div class="col-sm-2">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>

			<!-- PREVIOUS COMMENTS -->
			<div class="comment" ng-repeat="comment in comment">
				{{ comment.text }}
				
			</div>
			<div class="media">
				<div class="media-body">
					<h4 class="media-heading">Chris Sevilleja <small>Comment #{{ comment.id }}</small></h4>
					Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

					<div class="media">
						<div class="media-body">
							<h4 class="media-heading">Nested media heading</h4>
							Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
						</div>
					</div>
					
				</div>
			</div>

		</div>

	</div>
	<div class="col-sm-4">
		<h2>Sample Data</h2>
			<pre><code>
{{ newComment }}
			</code></pre>
	</div>
</body>
</html>