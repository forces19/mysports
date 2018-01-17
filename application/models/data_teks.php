<?php  
   class data_teks extends CI_Model  
   {  
      function __construct()  
      {  
         // Call the Model constructor  
         parent::__construct();  
      }  
      
      public function get_cons($code)  
      {  
         //data is retrive from this query  
         $h2 = $this->db->query("select description from article where name = '".$code."'")->row_array()['description'];  
         return $h2;  
      }

      public function simpan($data)
      {
            $this->db->insert('article',$data);
      }

      public function hapus($id){
		    $this->db->where('id',$id);
		    $this->db->delete('article');
      }

    public function edit($id){
		$this->db->where('id',$id);
		return $this->db->get('article');
	}

	public function update($id,$data){
		$this->db->where('id',$id);
		$this->db->update('article',$data);
	}
}  