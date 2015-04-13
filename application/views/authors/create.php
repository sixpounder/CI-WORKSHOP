<div ng-controller="AuthorController">
  <h1>Create author</h1>
  <label for="name" class="control-label">Author name</label>
  <input type="text" class="form-control" name="name" ng-model="author.name" />
  <button class="mt60 btn btn-primary" ng-click="create()">Create</button>
</div>