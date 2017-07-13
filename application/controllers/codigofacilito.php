<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Codigofacilito extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('myhelper');
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

}