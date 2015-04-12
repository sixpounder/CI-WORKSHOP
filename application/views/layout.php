<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en" ng-app="bookshelf">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>{title}</title>
    <link rel="stylesheet" type="text/css" href="<?php echo css('bootstrap.min.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo css('bootstrap-theme.min.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo css('app.css') ?>" />
  </head>
  <body>
    
    {navbar}
    <div class="container">
      {content}
    </div>
    
    <script type="text/javascript" src="<?php echo js('jquery-2.1.3.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo js('bootstrap.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo js('angular.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo js('angular-resource.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo js('app.js') ?>"></script>

  </body>
</html>