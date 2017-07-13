<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Codigofacilito extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('myhelper');
        $this->load->helper('form');
        $this->load->model('codigofacilito_model');
    }

    function index(){
        $this->load->library('menu', array('Index', 'Courses', 'Contact'));
        $data['my_menu'] = $this->menu->buildMenu();
        $this->load->view('codigofacilito/headers');
        $this->load->view('codigofacilito/bienvenido', $data );
        $this->load->view('codigofacilito/footers');
    }

    function holamundo(){
        $this->load->view('codigofacilito/headers');
        $this->load->view('codigofacilito/bienvenido');
        $this->load->view('codigofacilito/footers');
    }

    function nuevo(){
        $this->load->view('codigofacilito/headers');
        $this->load->view('codigofacilito/formulario');
        $this->load->view('codigofacilito/footers');
    }

    function getData(){
        $data = array(
            'name' => $this->input->post('name'),
            'videos' => $this->input->post('videos')
        );

        $this->codigofacilito_model->addCourse($data);

        $this->load->view('codigofacilito/headers');
        $this->load->view('codigofacilito/bienvenido');
        $this->load->view('codigofacilito/footers');
    }

}