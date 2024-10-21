<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public $iplocationtimezone;
    public function __construct()
    {
        parent::__construct();
        $this->load->library('IpLocationTimezone');
    }

	public function index()
	{	
		// Fetch the user's IP and timezone
        $locationData = $this->iplocationtimezone->setTimezoneByIp();

		// Check if a timezone was successfully retrieved
        if ($locationData['timezone']) {
            // Set the timezone based on IP location
            date_default_timezone_set($locationData['timezone']);

            // Get the current time in the set timezone
            $currentTime = date('Y-m-d H:i:s');

            // Pass the current time to the view
            $data['currentTime'] = $currentTime;
            $data['ip'] = $locationData['ip'];
            $data['timezone'] = $locationData['timezone'];
			$data['country'] = $locationData['country'];
        } else {
            // Fallback message if no timezone was found
            $data['currentTime'] = "Unable to fetch current time.";
            $data['ip'] = "Unknown";
            $data['timezone'] = "Unknown";
			$data['country'] = "Unknown";
        }

		// Load the view and pass data to it
        $this->load->view('welcome_message', $data);
	}

	public function courses()
	{
		$this->load->view('courses');
	}

	public function specializations($courseName = NULL)
	{
		$data['courseName'] = $courseName;
		$this->load->view('specialization', $data);
	}
}
