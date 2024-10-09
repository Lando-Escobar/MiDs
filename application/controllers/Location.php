<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Location extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('LocationModel');
    }

    // Afficher les régions
    public function index() {
        $data['regions'] = $this->LocationModel->get_regions();
        $this->load->view('regions_view', $data);
    }

    // Afficher les districts d'une région
    public function districts($region_code) {
        $data['districts'] = $this->LocationModel->get_all_districts_by_region($region_code);
        // Récupérer le nom de la région en fonction de son code
        $data['region_name'] = $this->LocationModel->get_region_name($region_code);
        
        // Vérifier si la région est trouvée, sinon afficher un message d'erreur
        if ($data['region_name'] === null) {
            $data['region_name'] = 'Région inconnue';
        }
        $this->load->view('districts_view', $data);
    }
    public function district_details($district_code) {
        // Récupérer les informations spécifiques du district
        $data['district'] = $this->LocationModel->get_district_details($district_code);
        
        // Charger la vue pour afficher les détails du district
        $this->load->view('district_details_view', $data);
    }
    
    public function regions() {
        $data['regions'] = $this->LocationModel->get_regions();
        $this->load->view('regions_view', $data);
    }
    
}
		
