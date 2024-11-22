<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VideoController extends CI_Controller {

    public $vimeo_api;
    public function __construct() {
        parent::__construct();
        $this->load->library('vimeo_api'); // Load the Vimeo API library
    }

    public function index() {
        echo "It works!";
    }

    public function upload() {
        // Path to the video file
        $filePath = '../assets/video.mp4';

        // Upload the video
        $response = $this->vimeo_api->uploadVideo($filePath);

        if (isset($response['error'])) {
            echo 'Failed to upload video: ' . $response['error'];
        } else {
            echo 'Video uploaded successfully. Video URI: ' . $response['body']['uri'];
        }
    }

    public function videoDetails($videoId) {
        $response = $this->vimeo_api->getVideoDetails($videoId);
        echo '<pre>';
        print_r($response);
        echo '</pre>';
    }
}
