<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

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
     * @see http://codeigniter.com/user_guide/general/urls.html
     */

    function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }
    public function index()
    {
        $this->load->view('principal/incluir/cabecera');
        $this->load->view('principal/incluir/slider');
        $this->load->view('principal/index');
        $this->load->view('principal/incluir/pie');
    }
    public function nosotros()
    {
        $this->load->view('principal/incluir/cabecera');
        $this->load->view('principal/incluir/pie');
    }
    public function paquetes()
    {
        $this->load->view('principal/incluir/cabecera');
        $this->load->view('principal/incluir/pie');
    }
    public function portafolio()
    {
        $this->load->view('principal/incluir/cabecera');
        $this->load->view('principal/incluir/pie');
    }
    public function afiliate()
    {
        $this->load->view('principal/incluir/cabecera');
        $this->load->view('principal/incluir/pie');
    }
    public function contacto()
    {
        $this->load->view('principal/incluir/cabecera');
        $this->load->view('principal/incluir/pie');
    }
}
