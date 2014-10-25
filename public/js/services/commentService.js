angular.module('commentService', [])

	.factory('Comment', function($http) {

		return {
			get : function() {
				return $http.get('api/comments');
			},
			show : function(id) {
				return $http.get('api/comments/' + id);
			},
			save : function(commentData) {
				return $http({
					method: 'POST',
					url: 'api/comments',
					headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
					data: $.param(commentData)
				});
			},
			destroy : function(id) {
				return $http.delete('api/comments/' + id);
			}
		}

	});