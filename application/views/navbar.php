<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url() ?>">Bookshelf</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li>
          <a href="/">Books</a>
        </li>
        <li>
          <a href="/authors">Authors</a>
        </li>
        <li>
          <a href="/articles">Articles</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php if($current_user): ?>
          
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Create <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="/books/create">Book</a></li>
              <li><a href="/authors/create">Author</a></li>
              <li><a href="/articles/create">Article</a></li>
            </ul>
          </li>
          <li><a href="/users/logout"><strong>Logout</strong></a></li>
        <?php else: ?>
          <li><a href="/users/login">Login</a></li>
        <?php endif ?>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>