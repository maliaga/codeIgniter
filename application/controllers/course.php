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
        $this->load->model('courses_model');
    }

    function newCourse()
    {
        $this->load->view('commons/headers');
        $this->load->view('courses/form');
        $this->load->view('commons/footers');
    }

    function index()
    {
        $data['segment'] = $this->uri->segment(3);

        if (!$data['segment']) {
            $data['courses'] = $this->courses_model->getAllCourses();
        } else {
            $data['courses'] = $this->courses_model->getCourse($data['segment']);
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

        $this->courses_model->addCourse($data);

        $this->load->view('commons/headers');
        $this->load->view('home/welcome');
        $this->load->view('commons/footers');
    }

    function edit()
    {
        $data['id'] = $this->uri->segment(3);

        $data['course'] = $this->courses_model->getCourse($data['id']);

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

        $this->courses_model->updateCourse($this->uri->segment(3), $data);

        redirect(base_url());
    }

    function delete()
    {
        $id = $this->uri->segment(3);
        $this->courses_model->deleteCourse($id);
    }
}