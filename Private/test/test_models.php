<?php
require_once('test.php');


$get = testModels('Story', 'getFullStory', 1);
var_dump($get);