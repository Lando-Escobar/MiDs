<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        // Charger la vue acceuil.php
        $this->load->view('acceuil');
    }
}
