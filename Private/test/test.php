<?php
require_once '../config/config.php';
require_once '../modules/Database.php';
require_once '../models/Writer.php';
require_once '../models/Story.php';

// Target URL
$root = "http://localhost:8080/ARTO/";

function testControllers($request_method, $controller, $method = null, $params = [], $form_data = null): bool|array
{
    global $root;
    $page = $controller;
    $func = $method;
    $param = $params;
    $test_url = $root . $page . '/' . $func . '/' . $param;

    if ($request_method == 'POST') {
        // use key 'http' even if you send the request to https://...
        $options = array(
            'http' => array(
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => $request_method,
                'content' => http_build_query($form_data)
            )
        );
        $context = stream_context_create($options);
        return get_headers($test_url, 1, $context);
    } else {
        return get_headers($test_url, 1);
    }
}

function testModels($model, $func, $data)
{
    if ($model == 'Story') {
        $story = new Story();
        return $story->$func($data);
    } else {
        $writer = new Writer();
        return $writer->$func($data);
    }
}







