<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    <?php echo img($book->cover, FALSE, array('class' => 'book-cover')) ?>
  </div>
  <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
    <h1><?php echo $book->title ?></h1>
    <p class="lead">By <?php echo $book->author->name ?></p>

    <div class="mt60">
      <a class="btn btn-default" href="/books/edit/<?php echo $book->id ?>">Edit book</a>
      <a class="btn btn-danger" href="/books/delete/<?php echo $book->id ?>">Delete book</a>
    </div>
  </div>

</div>