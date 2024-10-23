<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public $default_lang = 'en'; // Default language
    public $translation;
    public $session;
    public $iplocationtimezone;
    public $form_validation;
    public $input;
    public $Student_model;

    public function __construct()
    {
        parent::__construct();
        $this->load->library('IpLocationTimezone');
        $this->load->library('Translation');
        $this->load->library(['session', 'form_validation']);
        $this->load->model('Student_model');
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
        $viewData = [];
        if ($this->session->userdata('logged_in')) {
            $viewData['loginMessage'] = 'Successfully logged in!';
        }
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

    public function login() {
        $this->load->view('components/login');
    }

     // Handle Login Submission
     public function do_login()
     {
        // echo  $this->input->post('username'); die();
        // Set form validation rules
         $this->form_validation->set_rules('username', 'Username', 'required');
         $this->form_validation->set_rules('password', 'Password', 'required');
 
         if ($this->form_validation->run() == FALSE) {
             // Validation failed, reload the login page
             $this->login();
         } else {
             // Get input values
             $username = $this->input->post('username');
             $password = $this->input->post('password');
 
             // Verify user credentials (You can enhance this with actual user authentication)
             $user = $this->Student_model->get_user($username, $password);
 
             if ($user) {
                 // If user is found, set session data
                 $this->session->set_userdata('logged_in', TRUE);
                 $this->session->set_userdata('user_id', $user->id);
                 $this->session->set_userdata('username', $user->username);
 
                 // Redirect to index with success message
                 $this->session->set_flashdata('login_message', 'Successfully logged in!');
                 redirect('your_controller/index');
             } else {
                 // Invalid credentials
                 $this->session->set_flashdata('error_message', 'Invalid username or password.');
                 $this->login();
             }
         }
     }
 

    public function resgister() {
        $this->load->view('components/register');
    }
}
