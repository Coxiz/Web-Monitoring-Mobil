<?php if ( !defined('BASEPATH')) exit('You dont have privilage to access this file');

class MHistory extends CI_CONTROLLER{
	public function __construct(){
		parent:: __construct();
		$this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
		$this->load->model('model_data_user', 'arianagr');
	}
    
    public function index(){
        if ($this->session->userdata('logged_in')==TRUE){
            if ($this->session->userdata('level')=='superadmin'){
                $data = $this->arianagr->get_history();
                $data = array('informasi' => $data);

                $this->load->view('templates/header');
                $this->load->view('pages/master/history', $data);
                $this->load->view('templates/footer');
            }
            else{
                redirect(base_url('mdashboard'));
            }
        }
        else{
            redirect(base_url('mdashboard'));
        }
    }
}