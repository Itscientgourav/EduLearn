<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IpLocationTimezone
{   
    private $CI;
    public function __construct()
    {
        // Get the CodeIgniter instance
        $this->CI =& get_instance();
    }

    // Function to get the user's IP address
    public function getIp()
    {
        // Use ipify to get the public IP address
        $apiUrl = "https://api.ipify.org/?format=json";
        $locationData = file_get_contents($apiUrl);

        if ($locationData !== false) {
            $location = json_decode($locationData, true);
            return $location['ip'];
        }
        return null;  // Return null if IP fetching fails
    }

    // Function to get location details based on IP using ip-api
    public function getLocationByIp($ip)
    {
        // Use ip-api to get location details based on IP
        $apiUrl2 = "http://ip-api.com/php/" . $ip;
        $locationData2 = file_get_contents($apiUrl2);

        if ($locationData2 !== false) {
            // ip-api returns serialized data, so use unserialize()
            $locationDetails = unserialize($locationData2);
            return $locationDetails;
        }
        return null;  // Return null if location fetching fails
    }

    // Function to set the timezone based on location
    public function setTimezoneByIp()
    {
        $ip = $this->getIp();
        $timezone = null;

        if ($ip) {
            // Fetch location details based on IP
            $location = $this->getLocationByIp($ip);

            if ($location && isset($location['timezone'])) {
                // Set the timezone using location details
                $timezone = $location['timezone'];
                $country = $location['country'];
                date_default_timezone_set($timezone);
            }
        }
        return [
            'ip' => $ip,
            'timezone' => $timezone,
            'country' => $country
        ];
    }
}
