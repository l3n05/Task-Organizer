<?php

error_reporting(E_ERROR | E_PARSE);
include("functions.php");
include("header.php");

if (isset($_GET['page']) == 'search') {
  include("search.php");
}
else if(isset($_GET['page2']) == 'expired') {
  include("expired.php");
}
else {
  include("main.php");
}

include("footer.php");

?>
