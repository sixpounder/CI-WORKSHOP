var module = angular.module('bookshelf', ['ng', 'ngResource']);

module.config(['$httpProvider', function($httpProvider) {
  // This makes CI_Input->is_ajax_request() work!
  $httpProvider.defaults.headers.common["X-Requested-With"] = 'XMLHttpRequest';
  
  // This is needed because CI does not handle Request Payloads OOTB
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
    },
    destroy: {
      method: 'DELETE',
      isArray: false,
      headers: jsonHeader,
      params: {
        resource: 'book'
      }
    }
  });
}]);

module.factory('Author', ['$resource', function($resource) {
  var jsonHeader = {'Accept' : 'application/json', 'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8'};
  return $resource('/api/authors/:resource/:id', { id: '@id' }, {
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
        resource: 'author'
      }
    },
    update: {
      method: 'PUT',
      isArray: false,
      headers: jsonHeader,
      params: {
        resource: 'author'
      }
    },
    create: {
      method: 'POST',
      isArray: false,
      headers: jsonHeader
    },
    destroy: {
      method: 'DELETE',
      isArray: false,
      headers: jsonHeader,
      params: {
        resource: 'author'
      }
    }
  });
}]);

module.controller('AuthorsController', ['$scope', 'Author', function($scope, Author) {
  $scope.authors = Author.query();
}]);

module.controller('AuthorController', ['$scope', '$window', 'Author', function($scope, $window, Author) {
  $scope.author = null;
  
  $scope.init = function(id) {
    if(id) {
      $scope.author = Author.get({id: id});  
    } else {
      $scope.author = new Author();
    }
    
  };
  
  $scope.create = function() {
    Author.create($scope.author).$promise.then(function(res) {
      $window.location.href="/authors/" + res.id;
    }).catch(function(err) {
      $scope.message = err;
    });
  }
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
  
  $scope.gotoBookPage = function() {
    $window.location.href = "/books/" + $scope.book.id;
  };

  $scope.update = function() {
    var data = angular.copy($scope.book);
    delete data.author;

    Book.update({id: $scope.book.id}, data).$promise.then(function(response) {
      $scope.gotoBookPage();
    }).catch(function(err) {
      $scope.message = err;
    });
  };
  
  $scope.destroy = function() {
    Book.destroy({id: $scope.book.id}).$promise.then(function(response) {
      $window.location.href = "/books";
    }).catch(function(err) {
      $scope.message = err;
    });
  };

}]);