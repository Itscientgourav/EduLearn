<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Translation {

    protected $translations = [];
    
    public function __construct($lang_code = 'en') {
        $this->load_translations($lang_code);
    }

    // Load translations from JSON file
    public function load_translations($lang_code) {
        $file_path = APPPATH . 'language/' . $lang_code . '.json';
        if (file_exists($file_path)) {
            $this->translations = json_decode(file_get_contents($file_path), true);
        } else {
            // Fallback to English if the file does not exist
            $this->translations = json_decode(file_get_contents(APPPATH . 'language/en.json'), true);
        }
    }

    // Get a specific translation
    public function get($key) {
        return isset($this->translations[$key]) ? $this->translations[$key] : $key;
    }

    // Get all translations
    public function get_all() {
        return $this->translations;
    }
}