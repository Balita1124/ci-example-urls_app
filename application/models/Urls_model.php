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
            $num = $this->db->count_all_results();

        }while($num>=1);
        $query = "INSERT INTO `urls` (`url_code`, `url_address`) VALUES(?,?) ";
        $result = $this->db->query($query, array($url_code, $data['url_address']));

        if($result){
            return $url_code;
        }else{
            return false;
        }
    }
}