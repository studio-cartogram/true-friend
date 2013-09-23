var app = angular.module('gilder', ['ngRoute', 'ngAnimate', 'ngSanitize']);



app.config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) {
	'use strict';
	var templateBase = '/app/themes/thegilder-0.0.1/';
	$routeProvider
	.when('/', {
		templateUrl: templateBase + 'views/front-page.html',
		controller: 'caseStudiesController'
	})
	.when('/case-study/:slug', {
		templateUrl: templateBase + 'views/single.html',
		controller: 'caseStudyController'
	})
	.otherwise({
		redirectTo: '/'
	});

	$locationProvider.html5Mode(true);
}]);


app.factory('dataFactory', ['$http', '$timeout', function($http, $timeout) {

	var urlBase = '/api/';
	var jsonFlag = '';
	var dataFactory = {};

	dataFactory.getAllCaseStudies = function () {
		return $http.get(urlBase + 'get_posts?post_type=casestudies');
	};

	dataFactory.getCasestudy = function (slug) {
		return $http.get(/casestudies/ + slug + jsonFlag);
	};

	return dataFactory;
}]);



app.controller('caseStudiesController', ['$scope', 'dataFactory',
	function ($scope, dataFactory) {

		$scope.casestudies = [];

		function getData() {
			dataFactory.getAllCaseStudies()
			.success(function (data) {
				$scope.casestudies = data;
			})
			.error(function (error) {
				console.log('ERROR: ' + error);
			});
		}

		getData();

	}
]);


app.controller('caseStudyController', ['$scope', 'dataFactory', '$routeParams', '$sce',
	function ($scope, dataFactory, $routeParams, $sce) {

		$scope.casestudies = [];

		function loadCaseStudy(url) {
			dataFactory.getCasestudy($routeParams.slug)
			.success(function (data) {
				$scope.caseStudy = data;
				$scope.trustCaseStudy = function() {
					return $sce.trustAsHtml($scope.caseStudy);
				};	
			})
			.error(function (error) {
				console.log('ERROR: ' + error);
			});
		}

		loadCaseStudy();
	}
]);












