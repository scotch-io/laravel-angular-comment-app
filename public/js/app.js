var cometApp = angular.module('cometApp', ['ngRoute', 'main', 'commentService']);

cometApp.config(function($routeProvider, $locationProvider) {

	$routeProvider
		.when('/', {
			templateUrl : 'views/home.html',
			controller : 'mainController'
		});

});