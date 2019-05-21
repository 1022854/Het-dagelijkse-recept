<?php
require "menu.php";

$success = insert_order($_POST, $_SESSION["cart"]);
if ($success) {
  http_response_code(500);
  die();
}
