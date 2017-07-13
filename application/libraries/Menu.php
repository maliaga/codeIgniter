<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: maliaga
 * Date: 7/12/17
 * Time: 00:42
 */
class Menu
{
    private $arr_menu;
    public function __construct($arr)
    {
        $this->arr_menu = $arr;
    }

    public function buildMenu(){

        $ret_menu = "<nav><ul>";
        foreach ($this->arr_menu as $menu) {
            $ret_menu .= "<li>".$menu ."</li>";
        }
        $ret_menu .= "</ul></nav>";
        return $ret_menu;
    }
}