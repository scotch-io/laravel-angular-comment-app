angular.module('mainCtrl', [])

	.controller('mainController', function($scope, $http, Comment) {
		// object to hold all the data for the new comment form
		$scope.commentData = {};
		
		// get all the comments first and bind it to the $scope.comments object
		Comment.get()
			.success(function(data) {
				$scope.comments = data;
			});


		// function to handle submitting the form
		$scope.submitComment = function() {

			// save the comment. pass in comment data from the form
			Comment.save($scope.commentData)
				.success(function(data) {

					// if successful, we'll need to refresh the comment list
					Comment.get()
						.success(function(getData) {
							$scope.comments = getData;
						});

				});
		};

		// function to handle deleting a comment
		$scope.deleteComment = function(id) {
			Comment.destroy(id)
				.success(function(data) {

					// if successful, we'll need to refresh the comment list
					Comment.get()
						.success(function(getData) {
							$scope.comments = getData;
						});

				});
		};

	});