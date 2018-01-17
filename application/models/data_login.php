<?php
    class Data_login extends CI_Model{

        function __construct()  
        {  
            // Call the Model constructor  
            parent::__construct();  
        }  
        
        function cek_login($table,$where){
            return $this->db->get_where($table,$where);
        }

        public function getdata()
        {
            $sql = $this->db->query("select * from article");
            return $sql;
        }

    }
?>