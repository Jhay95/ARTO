<?php
require_once('test.php');

// Comment out each number for testing


/*//1. Other methods to test [index==home==default, about,contact,stories,login]
$page_header = testControllers('GET','pages','about');
assert(strpos($page_header[0], '200') == true);
*/

/*//2.  Test Registration method works with unregistered email
$reg_form = [
    'fname'=> '',
    'lname'=> '',
    'city'=> 'Nottington',
    'state'=> 'London',
    'email'=> '@gmail.com',
    'password'=> '#$',
];
$reg_result = testControllers('POST', 'writers', 'register', '', $reg_form,);
assert(!empty($reg_result['location'][0]) === true);
assert(strpos($reg_result[0], '302') == true);
assert(strpos($reg_result['location'][0], 'writers/index') == true);*/



/*//3. Test Login works with right credentials
$login_form = [
    'email'=> '@gmail.com',
    'password'=> '#$',
];

$login_result = testControllers('POST', 'writers', 'login', '' ,$login_form);
assert(!empty($login_result['location'][0]) === true);
assert(strpos($login_result[0], '302') == true);
assert(strpos($login_result['location'][0], 'writers/index') == true);*/

/**
 * Testing Login Session
 */

/*//1. Accessing a profile page when not in session and not logged in
$get_profile = testControllers('GET', 'writers', 'index', 16);
assert(!empty($get_profile['location']) === true);
assert(strpos($get_profile[0], '302') == true);
assert(strpos($get_profile['location'], 'pages/error') == true);*/


/*//2. Editing profile with registered email
$update_form = [
    'fname'=> '',
    'lname'=> '',
    'email'=> '',
    'profile' => '',
    'city' => '',
    'state' => ''
];
$update_result = testControllers('POST', 'writers', 'edit', 17 ,$update_form);
var_dump($update_result);
assert(!empty($update_result['location']) === true);
assert(strpos($update_result[0], '302') == true);
assert(strpos($update_result['location'], 'pages/error') == true);*/


/*//3. Deleting profile with registered email
$deleted_result = testControllers('GET', 'writers','delete', 10);
var_dump($deleted_result);
assert(!empty($deleted_result['location']) === true);
assert(strpos($deleted_result[0], '302') == true);
assert(strpos($deleted_result['location'], 'pages/error') == true);
//Failed - action completed and redirected to login page*/


/*//4. Creating a new story by a writer
$story = [
    'title' => '',
    'body' => 'Lorem ipsum',
    'category' => 'Tradition',
    'tag' => 'home',
    'location' => 'Chrisville',
];

$new_story = testControllers('POST', 'stories', 'new', 16, $story);
assert(!empty($new_story['location']) === true);
assert(strpos($new_story[0], '302') == true);
assert(strpos($new_story['location'], 'pages/error') == true);*/
