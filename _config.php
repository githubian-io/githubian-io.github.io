<?php

ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

require 'vendor/autoload.php';
$lib = new \Vimeo\Vimeo('d7998115f12805038dd6e0a9b2f22564e3507ed3', 'cMoEdEd9Z7pyPZsqGQCRvqF14w91fhrdeWvmmPJ3u+iAVfRDRHP4XRup6hDdYTaqLwB4DiEjaxiByycZCp6/Nr6RfAQ8wIG/5e7zgdQStVk9K+ALCyBnE3hexGTNpuJ/');

// The documentation refers to the following as `privacy.view`
$params = ['privacy' => ['view' => 'disable']];

$scope = ['public'];

// $response = $lib->request('/tutorial', array(), 'GET');
// print_r($response['body']['message']);

// `scope` is an array of permissions your token needs to access.
// You can read more at https://developer.vimeo.com/api/authentication#supported-scopes
$token = $lib->clientCredentials($scope);


// usable access token
var_dump($token['body']['access_token']);

// accepted scopes
var_dump($token['body']['scope']);

// use the token
$lib->setToken($token['body']['access_token']);

$response = $lib->request('/me/videos', ['per_page' => 2], 'GET');

echo json_encode($response);

?>