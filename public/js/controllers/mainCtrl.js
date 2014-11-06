angular.module('mainCtrl', [])

	.controller('mainController', function($scope, $http, Comment) {
		// object to hold all the data for the new comment form
		$scope.commentData = {};

		// loading variable to show the spinning loading icon
		$scope.loading = true;
		
		// get all the comments first and bind it to the $scope.comments object
		Comment.get()
			.success(function(data) {
				$scope.comments = data;
				$scope.loading = false;
			});


		// function to handle submitting the form
		$scope.submitComment = function() {
			$scope.loading = true;

			// save the comment. pass in comment data from the form
			Comment.save($scope.commentData)
				.success(function(data) {
					$scope.commentData = {};
					// if successful, we'll need to refresh the comment list
					Comment.get()
						.success(function(getData) {
							$scope.comments = getData;
							$scope.loading = false;
						});

				})
				.error(function(data) {
					console.log(data);
				});
		};

		// function to handle deleting a comment
		$scope.deleteComment = function(id) {
			$scope.loading = true; 

			Comment.destroy(id)
				.success(function(data) {

					// if successful, we'll need to refresh the comment list
					Comment.get()
						.success(function(getData) {
							$scope.comments = getData;
							$scope.loading = false;
						});

				});
		};

	});