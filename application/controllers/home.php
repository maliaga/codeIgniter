<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Codigofacilito extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('myhelper');
        $this->load->helper('form');
        $this->load->model('courses_model');
    }

    function index(){
        $this->load->library('menu', array('Index', 'Courses', 'Contact'));
        $data['my_menu'] = $this->menu->buildMenu();
        $this->load->view('commons/headers');
        $this->load->view('home/bienvenido', $data );
        $this->load->view('commons/footers');
    }

    function holamundo(){
        $this->load->view('commons/headers');
        $this->load->view('home/bienvenido');
        $this->load->view('commons/footers');
    }
}