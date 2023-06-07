<?php
include_once('config/config.inc.php');
session_destroy();
header("location:http://localhost/project/index.php");
?>