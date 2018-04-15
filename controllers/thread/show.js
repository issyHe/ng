'use strict';

angular.module('com.ngnice.app').controller('ThreadShowController', function ThreadShowController($stateParams,$scope) {
  this.id = $stateParams.id;
  this.title = $stateParams.title;
  this.poster = $stateParams.poster;
  console.log($scope.vm === this,"$scope.vm === this");
  return this;
});
