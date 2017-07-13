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
        $this->load->view('courses/formulario');
        $this->load->view('commons/footers');
    }

    function index()
    {
        $data['segment'] = $this->uri->segment(3);

        if (!$data['segment']) {
            $data['courses'] = $this->codigofacilito_model->getAllCourses();
        } else {
            $data['courses'] = $this->codigofacilito_model->getCourse($data['segment']);
        }

        $this->load->view('commons/headers');
        $this->load->view('courses/courses', $data);
        $this->load->view('commons/footers');
    }

    function saveData()
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

    function edit()
    {
        $data['id'] = $this->uri->segment(3);

        $data['course'] = $this->codigofacilito_model->getCourse($data['id']);

        $this->load->view('commons/headers');
        $this->load->view('courses/edit', $data);
        $this->load->view('commons/footers');
    }

    function update()
    {
        $data = array(
            'name' => $this->input->post('name'),
            'videos' => $this->input->post('videos')
        );

        $this->codigofacilito_model->updateCourse($this->uri->segment(3), $data);

        $this->load->view('commons/headers');
        $this->load->view('codigofacilito/bienvenido');
        $this->load->view('commons/footers');
    }

    function delete()
    {
        $id = $this->uri->segment(3);
        $this->codigofacilito_model->deleteCourse($id);
    }
}