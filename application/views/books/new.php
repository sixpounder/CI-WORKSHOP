<h1>New book</h1>
<?php echo form_open('/api/books', array('class'=>"form-horizontal")) ?>

  <div class="form-group">
    <label for="title" class="col-sm-2 control-label">Title</label>
    <div class="col-sm-10">
      <input type="text" name="title" class="form-control" id="title" placeholder="Title" />
    </div>
  </div>
  
  <div class="form-group">
    <label for="author" class="col-sm-2 control-label">Author</label>
    <div class="col-sm-10">
      <select name="author_id">
        <?php foreach ($authors as $author): ?>
          <option value="<?php echo $author->id ?>" <?php echo ($author_id == $author->id ? 'selected' : '') ?> >
            <?php echo $author->name ?>
          </option>
          
        <?php endforeach ?>
      </select>
    </div>
  </div>
  
  <div class="form-group">
    <label for="synopsis" class="col-sm-2 control-label">Synopsis</label>
    <div class="col-sm-10">
      <textarea class="form-control" rows="5" name="synopsis" placeholder="Book synopsis"></textarea>
    </div>
  </div>
  
  <div class="form-group">
    <label for="cover" class="col-sm-2 control-label">Cover image URL</label>
    <div class="col-sm-10">
      <input type="text" name="cover" class="form-control" id="title" placeholder="Cover image URL" />
    </div>
  </div>
  
  <div class="form-group">
    <label for="" class="col-sm-2 control-label"></label>
    <div class="col-sm-10">
      <input class="btn btn-primary" type="submit" value="Create" />
    </div>
  </div>
  
<?php echo form_close() ?>
