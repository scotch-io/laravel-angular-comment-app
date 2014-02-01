angular.module('mainCtrl', [])

	.controller('mainController', function($scope, $http, Comment) {
		$scope.comments = [
			{
				id: 1,
				text: 'this is the first comment',
				author: 'Chris Sevilleja'
			},
			{
				id: 2,
				text: 'this is the second comment',
				author: 'Holly Lloyd'
			}
		];


	});