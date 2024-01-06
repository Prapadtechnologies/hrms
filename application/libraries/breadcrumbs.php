<?php

class Breadcrumbs {

    public function build_breadcrumbs() {

        $CI = & get_instance();
        $id = $CI->session->userdata('menu_active_id');
        $menu_id=  array_reverse($id);
        $breadcrumbs = "";
        foreach ($menu_id as $v_id) {

            $menu = $CI->db->query("SELECT tbl_menu.*
                                        FROM tbl_menu
                                        WHERE tbl_menu.menu_id=$v_id ;")->result_array();

            //while ($items = mysqli_fetch_assoc($menu)) {
            foreach ($menu as $items) { 
                //print_r($menu);die;
                $breadcrumbs .= "<li>\n  <a href='" . base_url() . $items['link'] . "'>" . $items['English'] . "</a>\n</li> \n";

            }
        }
        
        return $breadcrumbs;
    }

}
