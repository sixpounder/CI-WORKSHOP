var module = angular.module('bookshelf', ['ng', 'ngResource']);

module.config(['$httpProvider', function($httpProvider) {
  $httpProvider.defaults.transformRequest = function(data) {
    if (data === undefined) return data;

    var clonedData = angular.copy(data);
    for (var property in clonedData)
        if (property.substr(0, 1) == '$')
            clonedData[property] = null;

    return $.param(clonedData);
  };
}]);

module.factory('Book', ['$resource', function($resource) {
  var jsonHeader = {'Accept' : 'application/json', 'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8'};
  return $resource('/api/books/:resource/:id', { id: '@id' }, {
    query: {
      method: 'get',
      isArray: true,
      headers: jsonHeader,
      params: {
        id: null,
        resource: null
      }
    },
    get: {
      method: 'get',
      isArray: false,
      headers: jsonHeader,
      params: {
        resource: 'book'
      }
    },
    update: {
      method: 'PUT',
      isArray: false,
      headers: jsonHeader,
      params: {
        resource: 'book'
      }
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

module.controller('BookController', ["$scope", '$window', "Book", function($scope, $window, Book) {
  $scope.book = null;
  $scope.message = null;

  $scope.init = function(id) {
    $scope.book = Book.get({id: id});
  };

  $scope.update = function() {
    var data = angular.copy($scope.book);
    delete data.author;

    Book.update({id: $scope.book.id}, data).$promise.then(function(response) {
      $window.location.href = "/books/" + $scope.book.id;
    }).catch(function(err) {
      $scope.message = err;
    });
  };

}]);