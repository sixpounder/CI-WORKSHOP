<div id="bookshelf" ng-controller="BookshelfController">
  <h1 ng-cloak>
    Library
    <small>{{books.length}} books available</small>
  </h1>
  <div class="form-group">
    <div class="input-group">
      <input type="text" class="form-control" id="search" placeholder="Filter by title or author" ng-model="searchFilter">
      <div class="input-group-addon">
        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
      </div>
    </div>
  </div>

  <!-- <?php foreach ($books as $book): ?>
    <a href="/books/<?php echo $book->id ?>">
      <h4><?php echo $book->title ?></h4>
    </a>
  <?php endforeach ?> -->

  <div id="booksList">
    <div ng-repeat="book in books | filter:searchFilter" ng-cloak>
      <h4>
        <a href="/books/{{book.id}}">{{book.title}}</a>
        <small>by <a href="/authors/{{book.author_id}}">{{book.author_name}}</a></small>
      </h4>
    </div>
  </div>
</div>