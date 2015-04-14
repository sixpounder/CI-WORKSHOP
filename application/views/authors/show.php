<div ng-controller="AuthorController" ng-init="init(<?php echo $author_id ?>)" ng-cloak>
  <ol class="breadcrumb">
    <li><a href="/authors">Authors</a></li>
    <li class="active">{{author.name}}</li>
  </ol>
  <div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
      <h1>{{author.name}}</h1>    
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
      <a href="/books/create?author_id={{author.id}}">Add book for {{author.name}}</a>
    </div>
  </div>
  
  <div class="book-list clearfix">
    <div class="book" ng-repeat="book in author.books">
      <a href="/books/{{book.id}}" title="{{book.title}}" class="">
        <div class="panel panel-default clearfix">
          <div class="panel-body">
            <img alt="{{book.title}}" src="{{book.cover}}" />
          </div>
          <div class="panel-footer">{{book.title}}</div>
        </div>
      </a>
    </div>
  </div>
</div>