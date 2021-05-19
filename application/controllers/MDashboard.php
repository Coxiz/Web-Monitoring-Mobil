<?php if ( !defined('BASEPATH')) exit('You dont have privilage to access this file');

class MDashboard extends CI_CONTROLLER{
	public function __construct(){
		parent:: __construct();
		$this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
		$this->load->model('model_data_user', 'arianagr');
	}
    
    public function index($page='dashboard'){
        if(!file_exists(APPPATH.'views/pages/master/'.$page.'.php')){
			show_404();
		}        
        
        $ttlstatus = $this->arianagr->count_row_status();
        $ttlmobil = $this->arianagr->count_row_mobil_available();
        $ttldriver = $this->arianagr->count_row_driver_available();
        $ttlpengajuan = $this->arianagr->count_row_pengajuan();
        $data = array(
                    'totalstatus' => $ttlstatus, 
                    'totalmobil' => $ttlmobil, 
                    'totaldriver' => $ttldriver,
                    'totalpengajuan' => $ttlpengajuan
                    );
        
        $this->load->view('templates/header');
        $this->load->view('pages/master/'.$page, $data);
        $this->load->view('templates/footer');
    }
}