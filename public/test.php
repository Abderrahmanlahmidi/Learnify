<?php

require_once "../models/test_classes.php";


$test = new Test();
$test->testRole();
$test -> testUser();
$test->testTag();
$test -> testCategories();
$test -> testCours();




?>