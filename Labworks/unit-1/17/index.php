<!DOCTYPE html>
<html>
<head>
    <title>PHP Include/Require Example</title>
</head>
<body>

<h2>Output from include</h2>
<?php
include 'file1.php';
include 'file2.php';
?>

<h2>Output from include_once</h2>
<?php
include_once 'file1.php';
include_once 'file2.php';
?>

<h2>Output from require</h2>
<?php
require 'file1.php';
require 'file2.php';
?>

<h2>Output from require_once</h2>
<?php
require_once 'file1.php';
require_once 'file2.php';
?>

</body>
</html>
