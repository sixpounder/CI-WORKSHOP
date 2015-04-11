<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>{title}</title>
    <link rel="stylesheet" type="text/css" href="<?php echo css('bootstrap.min.css') ?>" />
  </head>
  <body>
    
    <div class="container">
      {content}
    </div>
    
    <script type="text/javascript" src="<?php echo js('jquery-2.1.3.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo js('bootstrap.min.js') ?>"></script>

  </body>
</html>