'use strict';

angular.modul('trailApp', [ngRoute])
  .config(function($routeProvider){
    $routeProvider
      .when('/', {templateUrl: 'index.php'})
      .when('/trails', {templateUrl: 'trailsAnsicht.php'})
      .otherwise({redirectTo: '/'});
  })
  .controller('trailCtrl', function($scope){

  })
  .controller('loadTrails', function($scope){
    
  })
