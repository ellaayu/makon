<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){
        parent::__construct();
        
    }

	public function index()
	{
        $this->Model_Sequrity->getsequrity();
        $isi['content'] = 'tampilan_content';
        $isi['judul'] = 'Beranda';
        $isi['sub_judul'] = 'Selamat datang di Sistem Manajemen Kontrakan';
	$isi['listselasa'] = $this->Model_data_tugas->selasa();
        $isi['list'] = $this->Model_data_tugas->piket();
        $isi['listrabu'] = $this->Model_data_tugas->rabu();
        $isi['listkamis'] = $this->Model_data_tugas->kamis();
        $isi['listjumat'] = $this->Model_data_tugas->jumat();
        $isi['listsabtu'] = $this->Model_data_tugas->sabtu();
        $isi['listminggu'] = $this->Model_data_tugas->minggu();
        
		$this->load->view('tampilan_home',$isi); 
        
	}

    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
    
    
   
}
