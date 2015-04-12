<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|js|css|ttf|woff|woff2)$/', $_SERVER["REQUEST_URI"])) {
  // Raw files not to be server by CI controllers
  return false;
} else if (preg_match('/[a-z]*(:[0-9]*)?\/user_guide/', $_SERVER["REQUEST_URI"])) {
  // Let it use the local user guide documentation!
  return false;
} else {
  // Any other case is a go for index.php
  include __DIR__ . '/index.php';
}
?>