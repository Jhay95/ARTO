<?php
require_once '../config/config.php';
require_once '../modules/Database.php';
require_once '../models/Writer.php';


$get = new Writer();
/*//1. SQL Injection during login
assert($get->login('"or""="','1=="1"') == true);*/

/*//2. Accessing a user with given id
assert($get->getWriterById(6) == true);*/

/*//3. Accessing a user with registered email
assert($get->findWriterByEmail('judy@gmail.com') == true);*/

/*//4. Accessing a user with unregistered email
assert($get->getWriterByEmail('judy@gmail.com') == true);*/


