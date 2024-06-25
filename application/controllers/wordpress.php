<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wordpress extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function custom_data() 
    {
        // URL of the custom WordPress REST API endpoint
        $api_url = 'http://localhost/wordpress-6.5.4v1/wordpress/wp-json/myplugin/v1/custom_data';

        // Use cURL to fetch data from the WordPress REST API
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $api_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        curl_close($ch);

        // Decode the JSON response
        $custom_data = json_decode($response, true);

        // Pass the data to the view
        $data['custom_data'] = $custom_data;
        $this->load->view('custom_data_view', $data);
    }
}
