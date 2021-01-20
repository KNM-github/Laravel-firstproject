var app = angular.module('myApp',['activityService']);
app.controller('myCtrl',function($scope,$http){
	$scope.act = function(){
		console.log('asdfff');
	}
});
app.config(function($interpolateProvider, $compileProvider, $httpProvider) {
    $interpolateProvider.startSymbol('{%').endSymbol('%}');
});