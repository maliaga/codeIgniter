<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: maliaga
 * Date: 7/12/17
 * Time: 21:55
 */
class codigofacilito_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function addCourse($data)
    {
        $this->db->insert('cursos', array('nombre' => $data['name'], 'cantidad' => $data['videos']));
    }

    function getAllCourses()
    {
        $query = $this->db->get('cursos');
        if ($query->num_rows() > 0) return $query;
        else return false;
    }

    function getCourse($id)
    {
        $this->db->where('idCurso', $id);
        $query = $this->db->get('cursos');
        if ($query->num_rows() > 0) return $query;
        else return false;
    }

    function updateCourse($id, $course)
    {
        $data = array(
            'nombre' => $course['name'],
            'cantidad' => $course['videos']
        );

        $this->db->where('idCurso', $id);
        $query = $this->db->update('cursos', $data);
    }
}

