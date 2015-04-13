<div ng-controller="BookController" ng-init="init(<?php echo $book->id ?>)">
  <div class="panel panel-danger" ng-cloak>
    <div class="panel-heading">
      <h3 class="panel-title">Are you sure?</h3>
    </div>
    <div class="panel-body">
      Are you sure you want to delete <strong>{{book.title}}</strong>? This can't be undone!
    </div>
    <div class="panel-footer">
      <button class="btn btn-default" ng-click="gotoBookPage()">No</button>
      <button class="btn btn-danger" ng-click="destroy()">Yes</button>
    </div>
  </div>
</div>