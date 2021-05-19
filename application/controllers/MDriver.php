<?php if ( !defined('BASEPATH')) exit('You dont have privilage to access this file');

class MDriver extends CI_CONTROLLER{
	public function __construct(){
		parent:: __construct();
		$this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
		$this->load->model('model_data_user', 'arianagr');
	}
    
    public function index(){
        $avx = $this->input->get('p');
        if ($avx == 'avx') {
            $data = $this->arianagr->get_data_driver_available();
        } else {
            $data = $this->arianagr->get_data('driver');
        }
        $data = array('informasi' => $data);
        
        $this->load->view('templates/header');
        $this->load->view('pages/master/data_driver', $data);
        $this->load->view('templates/footer');
    }
    
    public function insert(){  
        if ($this->session->userdata('logged_in')==TRUE){
            if ($this->session->userdata('level')=='superadmin'){
                $this->form_validation->set_rules('nip_driver', 'Nip_driver', 'required');
                $this->form_validation->set_rules('fullname_driver', 'Fullname_driver', 'required');
                $this->form_validation->set_rules('phone_driver', 'Phone_driver', 'required');

                if ($this->form_validation->run() === FALSE){
                    $this->load->view('templates/header');
                    $this->load->view('pages/master/data_driver_insert');
                    $this->load->view('templates/footer');
                }
                else{
                    $this->insert_driver();
                }
            }
            elseif ($this->session->userdata('level')=='admin'){
                $this->form_validation->set_rules('nip_driver', 'Nip_driver', 'required');
                $this->form_validation->set_rules('fullname_driver', 'Fullname_driver', 'required');
                $this->form_validation->set_rules('phone_driver', 'Phone_driver', 'required');

                if ($this->form_validation->run() === FALSE){
                    $this->load->view('templates/header');
                    $this->load->view('pages/master/data_driver_insert');
                    $this->load->view('templates/footer');
                }
                else{
                    $this->insert_driver();
                }
            }
            else{
                redirect(base_url('mhome'));
            }
        }
        else{
            redirect(base_url('mhome'));
        }
    }
    
    public function insert_driver(){
        $data = array(
                    'nip_driver' => $this->input->post('nip_driver'),
                    'fullname_driver' => $this->input->post('fullname_driver'),
                    'phone_driver' => $this->input->post('phone_driver')
                );
        $data = $this->arianagr->set_data('driver', $data);
        redirect(base_url('mdriver'));
    }
    
    public function update_driver(){
        $id_driver = $this->input->post('id_driver');
        $nip_driver = $this->input->post('nip_driver');
        $fullname_driver = $this->input->post('fullname_driver');
        $phone_driver = $this->input->post('phone_driver');
        $status_driver = $this->input->post('status_driver');
        $data = array(
                    'nip_driver' => $nip_driver,
                    'fullname_driver' => $fullname_driver,
                    'phone_driver' => $phone_driver,
                    'status_driver' => $status_driver
                );
        $where = array(
                    'id_driver' => $id_driver,
                );
        
        $res = $this->arianagr->update_data('driver', $data, $where);
        if ($res>0){
            redirect(base_url('mdriver'));
        }
        else{
            $this->edit_driver();
        }
    }
    
    public function edit_driver($id_driver){    
        if ($this->session->userdata('logged_in')==TRUE){
            if ($this->session->userdata('level')!='user'){
                $yusah = $this->arianagr->get_where('driver', array('id_driver' => $id_driver));    
                $data = array(
                            'id_driver' => $yusah[0]['id_driver'],
                            'nip_driver' => $yusah[0]['nip_driver'],
                            'fullname_driver' => $yusah[0]['fullname_driver'],
                            'phone_driver' => $yusah[0]['phone_driver'],
                            'status_driver' => $yusah[0]['status_driver'],
                        );
                $this->load->view('templates/header');
                $this->load->view('pages/master/data_driver_update', $data);
                $this->load->view('templates/footer');
            }
            else{
                redirect(base_url('mhome'));
            }
        }
        else{
            redirect(base_url('mhome'));
        }
    }
        
    public function delete_driver($id_driver){
        if ($this->session->userdata('logged_in')==TRUE){
            if ($this->session->userdata('level')!='user'){
                $id_driver = array('id_driver' => $id_driver);
                $this->arianagr->delete_data('driver', $id_driver);
                redirect(base_url('mdriver'));
            }
            else{
                redirect(base_url('mhome'));
            }
        }
        else{
            redirect(base_url('mhome'));
        }
    }
}
    