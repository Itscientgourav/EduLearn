<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Vimeo\Vimeo;

class Vimeo_api {

    protected $vimeo;
    protected $CI;

    public function __construct() {
        // Load the CI instance
        $this->CI =& get_instance();

        $client_id = 'e74b079e502fa04903cad2e6fd22b712336e0844';
        $client_secret = '4/MmSycsZhWBZHPq2Gt/hNuRYATOymsmXs4ssuBKnXBEzBizlCIpRp07eH29PwNt2jERnnEE56HCOk++MRbB8gnyNvrGpTIFnhNrNGGbizhDGVPQRVq7DIK08CoQjd7R';
        $access_token = 'cebe9b0a081b4b05addb6e7964a5ea6f';

        // Initialize the Vimeo client
        $this->vimeo = new Vimeo($client_id, $client_secret, $access_token);
    }

    public function uploadVideo($filePath) {
        try {
            $response = $this->vimeo->upload($filePath);
            return $response;
        } catch (\Exception $e) {
            // Handle the exception (log it or return an error message)
            return ['error' => $e->getMessage()];
        }
    }

    public function getVideoDetails($videoId) {
        try {
            return $this->vimeo->request('/videos/' . $videoId);
        } catch (\Exception $e) {
            // Handle the exception (log it or return an error message)
            return ['error' => $e->getMessage()];
        }
    }
}
