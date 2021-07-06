<?php if ( !defined('BASEPATH')) exit('You dont have privilage to access this file');

class MUser extends CI_CONTROLLER{
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
                $data = $this->arianagr->get_data('user');
                $data = array('informasi' => $data);

                $this->load->view('templates/header');
                $this->load->view('pages/master/data_user', $data);
                $this->load->view('templates/footer');
            }
            else if ($this->session->userdata('level')=='admin'){
                $data = $this->arianagr->get_data('user');
                $data = array('informasi' => $data);

                $this->load->view('templates/header');
                $this->load->view('pages/master/data_user', $data);
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
    
    public function insert(){
        if ($this->session->userdata('logged_in')==TRUE){
            if ($this->session->userdata('level')=='superadmin'){
                $this->form_validation->set_rules('username_user', 'Username_user', 'required');
                $this->form_validation->set_rules('password_user', 'Password_user', 'required');
                $this->form_validation->set_rules('fullname_user', 'Fullname_user', 'required');
                $this->form_validation->set_rules('email_user', 'Email_user');
                $this->form_validation->set_rules('phone_user', 'Phone_user', 'required');
                $this->form_validation->set_rules('level_user', 'Level_user', 'required');

                if ($this->form_validation->run() === FALSE){
                    $this->load->view('templates/header');
                    $this->load->view('pages/master/data_user_insert');
                    $this->load->view('templates/footer');
                }
                else{
                    $this->insert_user();
                }
            }
            else if ($this->session->userdata('level')=='admin'){
                $this->form_validation->set_rules('username_user', 'Username_user', 'required');
                $this->form_validation->set_rules('password_user', 'Password_user', 'required');
                $this->form_validation->set_rules('fullname_user', 'Fullname_user', 'required');
                $this->form_validation->set_rules('email_user', 'Email_user');
                $this->form_validation->set_rules('phone_user', 'Phone_user', 'required');
                $this->form_validation->set_rules('level_user', 'Level_user', 'required');

                if ($this->form_validation->run() === FALSE){
                    $this->load->view('templates/header');
                    $this->load->view('pages/master/data_user_insert');
                    $this->load->view('templates/footer');
                }
                else{
                    $this->insert_user();
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
    
    public function insert_user(){
        $data = array(
                    //'id_user' => $this->input->get('id_user'),
                    'username_user' => $this->input->post('username_user'),
                    'password_user' => $this->input->post('password_user'),
                    'fullname_user' => $this->input->post('fullname_user'),
                    'email_user' => $this->input->post('email_user'),
                    'phone_user' => $this->input->post('phone_user'),
                    'level_user' => $this->input->post('level_user')
                );
        $data = $this->arianagr->set_data('user', $data);
        //$this->session->set_flashdata('msg', 'User berhasil ditambahkan');
        redirect(base_url('muser'));
    }
    
    public function update_user(){
        $id_user = $this->input->post('id_user');
        $username_user = $this->input->post('username_user');
        $password_user = $this->input->post('password_user');
        $fullname_user = $this->input->post('fullname_user');
        $email_user = $this->input->post('email_user');
        $phone_user = $this->input->post('phone_user');
        $level_user = $this->input->post('level_user');
        $data = array(
                    'username_user' => $username_user,
                    'password_user' => $password_user,
                    'fullname_user' => $fullname_user,
                    'email_user' => $email_user,
                    'phone_user' => $phone_user,
                    'level_user' => $level_user
                );
        $where = array(
                    'id_user' => $id_user,
                );
        
        $res = $this->arianagr->update_data('user', $data, $where);
        if ($res>0){
            redirect(base_url('muser'));
        }
    }
    
    public function edit_user($id_user){
        if ($this->session->userdata('logged_in')==TRUE){
            if ($this->session->userdata('level')=='superadmin'){
                $yusah = $this->arianagr->get_where('user', array('id_user' => $id_user));
                $data = array(
                            'id_user' => $yusah[0]['id_user'],
                            'username_user' => $yusah[0]['username_user'],
                            'password_user' => $yusah[0]['password_user'],
                            'fullname_user' => $yusah[0]['fullname_user'],
                            'email_user' => $yusah[0]['email_user'],
                            'phone_user' => $yusah[0]['phone_user'],
                            'level_user' => $yusah[0]['level_user'],
                        );
                $this->load->view('templates/header');
                $this->load->view('pages/master/data_user_update', $data);
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
        
    public function delete_user($id_user){
        if ($this->session->userdata('logged_in')==TRUE){
            if ($this->session->userdata('level')=='superadmin'){
                $id_user = array('id_user' => $id_user);
                $this->arianagr->delete_data('user', $id_user);
                redirect(base_url('muser'));
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
    