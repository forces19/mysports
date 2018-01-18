<?php
class Admin extends CI_Controller{

        function __construct(){
            parent::__construct();
            $this->load->model('data_login');
            $this->load->model('data_teks');
            if($this->session->userdata('status') != "login"){
            redirect(base_url("Welcome/login"));
            }
        }

        function index(){
            $data['sql'] = $this->data_login->getdata();
            $this->load->view('pages/admin',$data);
        }

        public function tambah()
        {
            $data = [];
            $data['pil']='tambah';
    		$data['judul'] = $this->data_teks->get_cons('judul');
            $this->load->view('pages/form',$data);
        }

        public function ubah($no)
        {
            $data['pil']='edit';
            $data['sql']= $this->data_teks->edit($no);
            $this->load->view('pages/form',$data);
        }

        public function simpan()
        {
            $pil=$this->input->post('pil');
            $id=$this->input->post('id');
            $name=$this->input->post('name');
            $description=$this->input->post('description');

            $data=array(
                'name'=>$name,
                'description'=>$description,);
            if ($pil == 'tambah'){
                $this->data_teks->simpan($data);
            }else{
                $this->data_teks->update($id,$data);
            }
            redirect('admin/index','refresh');
        }

        public function hapus($id){
            $this->data_teks->hapus($id);
            redirect('admin/index','refresh');
        }
    }
?>