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
        $this->load->view('principal/afiliate');
        $this->load->view('principal/incluir/pie');
    }

    public function contacto()
    {
        $this->load->view('principal/incluir/cabecera');
        $this->load->view('principal/contacto');
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

}
