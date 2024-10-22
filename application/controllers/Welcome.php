<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public $default_lang = 'en'; // Default language
    public $translation;
    public $session;
    public $iplocationtimezone;

    public function __construct()
    {
        parent::__construct();
        $this->load->library('IpLocationTimezone');
        $this->load->library('Translation');
        $this->load->library('session'); // Load session library
    }

    // Common function to set language and get location data
    private function initialize($lang_code = '')
    {
        // Fetch the user's IP and timezone
        $locationData = $this->iplocationtimezone->setTimezoneByIp();

        // Handle language session
        if (!empty($lang_code)) {
            $this->session->set_userdata('language', $lang_code);
        }

        // Get session language or default
        $lang_code = $this->session->userdata('language') ?: $this->default_lang;

        // Initialize translation for the selected language
        if (in_array($lang_code, ['en', 'hi'])) {
            $this->translation = new Translation($lang_code);
        }

        // Return location data and translations
        return [
            'locationData' => $locationData,
            'translations' => $this->translation->get_all(),
        ];
    }

    // Common function to set timezone and prepare view data
    private function prepare_view_data($locationData)
    {
        $data = [];

        // Check if a timezone was successfully retrieved
        if (!empty($locationData['timezone'])) {
            // Set the timezone based on IP location
            date_default_timezone_set($locationData['timezone']);

            // Prepare data for the view
            $data['currentTime'] = date('Y-m-d H:i:s');
            $data['ip'] = $locationData['ip'];
            $data['timezone'] = $locationData['timezone'];
            $data['country'] = $locationData['country'];
        } else {
            // Fallback if no timezone found
            $data['currentTime'] = "Unable to fetch current time.";
            $data['ip'] = "Unknown";
            $data['timezone'] = "Unknown";
            $data['country'] = "Unknown";
        }

        return $data;
    }

    public function index($lang_code = '')
    {
        // Initialize data for the current language
        $initData = $this->initialize($lang_code);

        // Prepare timezone and IP data for the view
        $locationData = $initData['locationData'];
        $viewData = $this->prepare_view_data($locationData);

        // Add translations to the view data
        $viewData['t'] = $initData['translations'];

        // Load the view
        $this->load->view('welcome_message', $viewData);
    }

    public function courses()
    {
        // Initialize data for the current language
        $initData = $this->initialize();

        // Prepare timezone and IP data for the view
        $locationData = $initData['locationData'];
        $viewData = $this->prepare_view_data($locationData);

        // Add translations to the view data
        $viewData['t'] = $initData['translations'];

        // Load the view
        $this->load->view('courses', $viewData);
    }

    public function specializations($courseName = NULL)
    {   
        // Initialize data for the current language
        $initData = $this->initialize();

        // Prepare timezone and IP data for the view
        $locationData = $initData['locationData'];
        $viewData = $this->prepare_view_data($locationData);

        // Add translations to the view data
        $viewData['t'] = $initData['translations'];
        $viewData['courseName'] = $courseName;
        $this->load->view('specialization', $viewData);
    }
}
