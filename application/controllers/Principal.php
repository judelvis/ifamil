<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this -> load -> model('panel/Mpanel', 'MPanel');
        $data['lst'] = $this -> MPanel -> listarNoticia();
        $data['emp'] = $this -> MPanel -> listarEmpresa();
        $this->load->view('principal/incluir/cabecera');
        $this->load->view('principal/incluir/slider');
        $this->load->view('principal/index',$data);
        $this->load->view('principal/incluir/pie');
    }

    public function nosotros()
    {
        $this->load->view('principal/incluir/cabecera');
        $this->load->view('principal/nosotros');
        $this->load->view('principal/incluir/pie');
    }

    public function paquetes($cat){
        $this -> load -> model('panel/Mpanel', 'MPanel');
        switch($cat){
            case 1:
                $datos['imagen'] = 'vacaciones.jpg';
                $datos['titulo'] = 'Transporte';
                break;
            case 2:
                $datos['imagen'] = 'vacaciones.jpg';
                $datos['titulo'] = 'Viajes';
                break;
            case 3:
                $datos['imagen'] = 'vacaciones.jpg';
                $datos['titulo'] = 'Hoteleria';
                break;
            case 4:
                $datos['imagen'] = 'vacaciones.jpg';
                $datos['titulo'] = 'Paquetes';
                break;
            default:
                $datos['imagen'] = 'vacaciones.jpg';
                $datos['titulo'] = 'Defecto';
                break;
        }
        $datos['lst'] = $this -> MPanel ->consultarPortafolioCat($cat);
        $this->load->view('principal/incluir/cabecera');
        $this->load->view('principal/paquetes',$datos);
        $this->load->view('principal/incluir/pie');
    }

    public function portafolio()
    {
        $this->load->view('principal/incluir/cabecera');
        $this->load->view('principal/portafolio');
        $this->load->view('principal/incluir/pie');
    }

    public function paratodos($id,$descrip=null)
    {

        $this->load->view('principal/incluir/cabecera');
        $this -> load -> model('panel/Mpanel', 'MPanel');
        $datos["lst"]=$this->MPanel->consultarGaleriaPortafolio($id);
        if($descrip != null)$data ['descrip'] = true;
        $this->load->view('principal/paratodos', $datos);
        $this->load->view('principal/incluir/pie');
    }

    public function afiliate()
    {
       $this->load->view('principal/incluir/cabecera');
        $this->load->view('principal/afiliate');
       $this->load->view('principal/incluir/pie');
    }

    public function contacto()
    {
        $this->load->view('principal/incluir/cabecera');
        $this->load->view('principal/contacto');
        $this->load->view('principal/incluir/pie');
    }

    public function reservacion()
    {
        $this->load->view('principal/incluir/cabecera');
        $this->load->view('principal/reservacion');
        $this->load->view('principal/incluir/pie');
    }
    public function opinion()
    {
        $this->load->view('principal/incluir/cabecera');
        $this->load->view('principal/opinion');
        $this->load->view('principal/incluir/pie');
    }
    public function oservicios()
    {
        $this->load->view('principal/incluir/cabecera');
        $this->load->view('principal/oservicios');
        $this->load->view('principal/incluir/pie');
    }
    /**
     * funciones para noticias
     */
    function noticias(){
        $this->load->model ( 'panel/Mpanel', 'MPanel' );
        $busqueda = $this->MPanel->listarNoticia ();
        $data ['lst'] = $busqueda;
        ///$data ['slider'] = true;
        $this->load->view ( 'principal/incluir/cabecera',$data );
        $this->load->view ( 'principal/noticias' ,$data);
        $this->load->view ( 'principal/incluir/pie' );
    }

    function verNoticia($id){
        $this->load->model ( 'panel/Mpanel', 'MPanel' );
        $busqueda = $this->MPanel->verNoticia ($id);
        $data ['lst'] = $busqueda;
        $data ['slider'] = true;

        $this->load->view ( 'principal/incluir/cabecera',$data );
        $this->load->view ( 'principal/verNoticia' ,$data);
        $this->load->view ( 'principal/incluir/pie' );
    }


    function paralax(){
        $this -> load->view("principal/paralax");
    }

}
