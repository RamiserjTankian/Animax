<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller 
{

    // CONSTRUCTOR Funciones comunes usadas por el panel 
    public function __construct() {
        parent::__construct();
        $this->load->model('MFunctionsg'); // CARGA LAS FUNCIONES GENERALES PARA EL Perfil
        $this->load->library('session'); // CARGA LAS SESSIONES
        // VERIFICA QUE EL USER ESTE LOGUEADO (La función esta dentro de Mfuntionsg)
        $this->load->view('website/header'); //Mi carpeta y mi archivo que corresponden a la vista
        $DATOS['user'] = $this->session->userdata('id'); // PASO LOS DATOS DEL USUARIO 
       
    }
    
    // **PAGINA DE INICIO DEL HOME**
	public function index()
	{	

        $this->load->model('MSerie'); // Carga el modelo de categorías 
        $this->load->model('MCategoria'); // Carga el modelo de categorías 
        $this->load->model('MGenero'); // Carga el modelo de categorías
        $this->load->model('MTemporada'); // Carga el modelo de categorías  
        $this->load->model('MCapitulo'); // Carga el modelo de categorías  
        $DATOS['capitulo'] = $this->MCapitulo->listacap(6);
        $DATOS['series'] = $this->MSerie->listades(3);
        $this->load->view('website/cuerpo-home',$DATOS);
        $this->load->view('website/footer');
	}
 
}
