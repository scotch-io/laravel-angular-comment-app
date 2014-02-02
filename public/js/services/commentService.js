angular.module('commentService', [])

	.factory('Comment', function($http) {

		return {
			get : function() {
				return $http.get('/api/comments');
			},
			show : function(id) {
				return $http.get('/api/comments/' + id);
			},
			save : function(commentData) {
				return $http.post('/api/comments', commentData);
			},
			destroy : function(id) {
				return $http.delete('/api/comments/' + id);
			}
		}

	});