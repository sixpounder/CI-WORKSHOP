<div id="bookshelf" ng-controller="AuthorsController">
  <h1 ng-cloak>
    Authors
    <small>{{authors.length}} available</small>
  </h1>
  <div class="form-group">
    <div class="input-group">
      <input type="text" class="form-control" id="search" placeholder="Filter by name" ng-model="searchFilter">
      <div class="input-group-addon">
        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
      </div>
    </div>
  </div>

  <div id="booksList">
    <div ng-repeat="author in authors | filter:searchFilter" ng-cloak>
      <h4>
        <a href="/authors/{{author.id}}">{{author.name}}</a>
        <small>authored {{author.books_authored}} books</small>
      </h4>
    </div>
  </div>
</div>