var module = angular.module('bookshelf', ['ng', 'ngResource']);

module.factory('Book', ['$resource', function($resource) {
  var jsonHeader = {'Accept' : 'application/json'};
  return $resource('/api/books/:id', { id: '@id' }, {
    query: {
      method: 'get',
      isArray: true,
      headers: jsonHeader,
      params: {
        id: null
      }
    },
    get: {
      method: 'get',
      isArray: false,
      headers: jsonHeader
    },
    update: {
      method: 'PUT',
      isArray: false,
      headers: jsonHeader,
    },
    create: {
      method: 'POST',
      isArray: false,
      headers: jsonHeader
    }
  });
}]);

module.controller('BookshelfController', ["$scope", "Book", function($scope, Book) {
  $scope.books = Book.query();

}]);