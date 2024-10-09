<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class LocationModel extends CI_Model {
   
    public function __construct()
    {
        parent::__construct();
        // Charger la bibliothèque de base de données
        $this->load->database();
    }
    // Récupérer toutes les régions
    public function get_regions() {
        return $this->db->get('region')->result_array();
    }
    
    // Récupérer les districts d'une région donnée
    public function get_all_districts_by_region($region_code) {
        $this->db->where('cdregion', $region_code);
        return $this->db->get('district')->result_array();
    }
 // Récupérer les détails d'un district en fonction de son code
    public function get_district_details($district_code) {
    $this->db->where('code_Districts', $district_code);
    $query = $this->db->get('district');
    return $query->row_array();  // Utiliser row_array pour un seul résultat
    }
     // Récupérer le nom de la région par code de région
     public function get_region_name($region_code) {
        $this->db->select('Nom_region');
        $this->db->where('cdregion', $region_code);
        $query = $this->db->get('region');
        
        // Vérifier si la région existe
        if ($query->num_rows() > 0) {
            return $query->row_array()['Nom_region'];
        } else {
            return null; // Retourner null si la région n'existe pas
        }
    }
   
}

