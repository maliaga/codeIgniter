<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: maliaga
 * Date: 7/13/17
 * Time: 06:51
 */
class Course extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('myhelper');
        $this->load->helper('form');
        $this->load->model('codigofacilito_model');
    }

    function new()
    {
        $this->load->view('commons/headers');
        $this->load->view('cursos/formulario');
        $this->load->view('commons/footers');
    }

    function getData()
    {
        $data = array(
            'name' => $this->input->post('name'),
            'videos' => $this->input->post('videos')
        );

        $this->codigofacilito_model->addCourse($data);

        $this->load->view('commons/headers');
        $this->load->view('codigofacilito/bienvenido');
        $this->load->view('commons/footers');
    }
}