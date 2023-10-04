<?php

require_once("util-db.php");
require_once("model-authors.php");


include "view-header.php";
$authors = selectAuthors();
include "view-authors.php";
include "view-footer.php";
?>
