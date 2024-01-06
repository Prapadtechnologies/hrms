<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/*
 *	@author : themetic.net
 *	date	: 21 April, 2015
 *	Inventory & Invoice Management System
 *	http://themetic.net
 *  version: 1.0
 */

class MY_Install
{
    public function __construct()
    {
        $CI = &get_instance();
        $CI->load->database();
        if ($CI->db->database == '') {
            header('location:install/');
        } else {
            return true;
            //query from installer tbl
            /*$installer = $CI->db->query('SELECT installer_flag FROM installer');
            $item = mysqli_fetch_assoc($installer);
            $flag = $item['installer_flag'];
            // if installer_flag = 0
            if ($flag == 0) {
                // make it 1
                $CI->db->query('UPDATE installer SET installer_flag=1 WHERE id=1');
                if (is_dir('install')) {
                    header('location:install/success.php');
                }
            }*/
            //run this code
            //else nothing
        }
    }
}
