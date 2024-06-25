<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index() {
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
