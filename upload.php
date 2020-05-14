<?php

ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);


use Vimeo\Vimeo;
use Vimeo\Exceptions\VimeoUploadException;

if(!isset($_REQUEST['tfUname']) || !isset($_REQUEST['tfVid'])){
    header('Location: tg://resolve?domain=TelefansCreatorBot');
}

$user = $_REQUEST['tfUname'];
$video = $_REQUEST['tfVid'];

$config = require(__DIR__ . '/_init.php');

if (empty($config['access_token'])) {
    throw new Exception(
        'You can not upload a file without an access token. You can find this token on your app page, or generate ' .
        'one using `auth.php`.'
    );
}

// Instantiate the library with your client id, secret and access token (pulled from dev site)
$lib = new Vimeo($config['client_id'], $config['client_secret'], $config['access_token']);

// Create a variable with a hard coded path to your file system
$file_name = $video;

echo 'Uploading: ' . $file_name . "\n";

try {
    // Upload the file and include the video title and description.
    $uri = $lib->upload($file_name, array(
        'name' => $video.time() ,
        'description' => "$user shared a video. Timestamp:".time()
    ));

    // $video_response = $lib->request(
    //     '/me/videos',
    //     [
    //         'upload' => [
    //             'approach' => 'pull',
    //             'link' => $url
    //         ],
    //     ],
    //     'POST'
    // );

    // Get the metadata response from the upload and log out the Vimeo.com url
    $video_data = $lib->request($uri . '?fields=link');
    // echo '"' . $file_name . ' has been uploaded to ' . $video_data['body']['link'] . "\n";
    $vid = base64_encode(str_replace('https://vimeo.com/', '', $video_data['body']['link']));
    echo json_encode("{
            'video': $vi
        ");

    // Make an API call to edit the title and description of the video.
    // $lib->request($uri, array(
    //     'name' => 'Vimeo API SDK test edit',
    //     'description' => "This video was edited through the Vimeo API's PHP SDK.",
    // ), 'PATCH');

    // echo 'The title and description for ' . $uri . ' has been edited.' . "\n";

    // Make an API call to see if the video is finished transcoding.
    $video_data = $lib->request($uri . '?fields=transcode.status');
    // echo 'The transcode status for ' . $uri . ' is: ' . $video_data['body']['transcode']['status'] . "\n";
} catch (VimeoUploadException $e) {
    // We may have had an error. We can't resolve it here necessarily, so report it to the user.
    echo 'Error uploading ' . $file_name . "\n";
    echo 'Server reported: ' . $e->getMessage() . "\n";
} catch (VimeoRequestException $e) {
    echo 'There was an error making the request.' . "\n";
    echo 'Server reported: ' . $e->getMessage() . "\n";
}

?>