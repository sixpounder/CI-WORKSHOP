<div ng-controller="BookController" ng-init="init(<?php echo $book->id ?>)">
  <h1 ng-cloak>Edit <strong>{{book.title}}</strong></h1>
  <ol class="breadcrumb">
    <li><a href="/books">Books</a></li>
    <li><a href="/books/{{book.id}}">{{book.title}}</a></li>
    <li class="active">Edit</li>
  </ol>
  <?php echo form_open('/api/books', array('class'=>"form-horizontal")) ?>
    <div class="form-group">
      <label for="title" class="col-sm-2 control-label">Title</label>
      <div class="col-sm-10">
        <input type="text" name="title" class="form-control" id="title" ng-model="book.title" placeholder="Title">
      </div>
    </div>
    <div class="form-group">
      <label for="author" class="col-sm-2 control-label">Author</label>
      <div class="col-sm-10">
        <select ng-model="book.author_id" name="author_id">
          <?php foreach ($authors as $author): ?>
            <option value="<?php echo $author->id ?>" <?php echo $book->author_id == $author->id ? "selected" : "" ?>>
              <?php echo $author->name ?>
            </option>
            
          <?php endforeach ?>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="cover" class="col-sm-2 control-label">Cover image URL</label>
      <div class="col-sm-10">
        <input type="text" name="cover" class="form-control" id="title" placeholder="Cover image URL" ng-model="book.cover">
      </div>
    </div>
    <div class="form-group">
      <label for="" class="col-sm-2 control-label"></label>
      <div class="col-sm-10">
        <button class="btn btn-primary" type="button" ng-click="update()">Save</button>
      </div>
    </div>
  <?php echo form_close() ?>
</div>