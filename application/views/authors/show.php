<div ng-controller="AuthorController" ng-init="init(<?php echo $author_id ?>)" ng-cloak>
  <ol class="breadcrumb">
    <li><a href="/authors">Authors</a></li>
    <li class="active">{{author.name}}</li>
  </ol>
  <h1>{{author.name}}</h1>
  <div class="book-list">
    <div class="book" ng-repeat="book in author.books">
      <a href="/books/{{book.id}}" title="{{book.title}}">
        <div class="">
          <div class="panel-body">
            <img alt="{{book.title}}" src="{{book.cover}}" />
          </div>
        </div>
      </a>
    </div>
  </div>
</div>