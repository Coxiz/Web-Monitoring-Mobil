<?php if ( !defined('BASEPATH')) exit('You dont have privilage to access this file');

class MPublic extends CI_CONTROLLER{
	public function __construct(){
		parent:: __construct();
		$this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
		$this->load->model('model_data_user', 'arianagr');
	}
    
    public function index(){
        if(!file_exists(APPPATH.'views/pages/public/public.php')){
			show_404();
		}
        $data = $this->arianagr->get_data_mas();
        $ttlstatus = $this->arianagr->count_row_status();
        $ttlmobil = $this->arianagr->count_row_mobil_available();
        $ttldriver = $this->arianagr->count_row_driver_available();
        $data = array('informasi' => $data, 
                      'totalstatus' => $ttlstatus, 
                      'totalmobil' => $ttlmobil, 
                      'totaldriver' => $ttldriver);
                
        $this->load->view('pages/public/public', $data);
    }
    
}