<?php

if(! defined('BASEPATH')) exit ('No direct script access allowed');

class Urls_model extends CI_model{

    function __construct(){
        parent::__construct();
    }
    
    function save_url($data){

        do{
            $url_code = random_string('alnum', 8);
            $this->db->where('url_code', $url_code);
            $this->db-from('urls');
        }while($num>=1)
    }
}