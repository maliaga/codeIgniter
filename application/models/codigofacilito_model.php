<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: maliaga
 * Date: 7/12/17
 * Time: 21:55
 */
class codigofacilito_model extends CI_Model
{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    function addCourse($data){
        $this->db->insert('cursos', array('nombre' => $data['name'],'cantidad' => $data['videos'] ));
    }
}

