<?php if ( !defined('BASEPATH')) exit('You dont have privilage to access this file');

class MHome extends CI_CONTROLLER{
	public function __construct(){
		parent:: __construct();
		$this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('model_data_user', 'arianagr');
	}
	
	public function index(){
        if ($this->session->userdata('logged_in')){
            if ($this->session->userdata('level')=='superadmin'){
                redirect('mdashboard');
            }
            else{
                redirect('mhome/home');
            }
        }
        else{
            $this->load->view('pages/index.php');
        }
	}
    
    public function login(){
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if ($this->form_validation->run() === FALSE){
            $this->load->view('pages/index.php');
        }
        else{
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            $user_id = $this->arianagr->login($username, $password);
            
            if($user_id){
                $user_data = array(
                                'user_id' => $user_id['id_user'],
                                'username' => $user_id['username_user'],
                                'password' => $user_id['password_user'],
                                'fullname' => $user_id['fullname_user'],
                                'level' => $user_id['level_user'],
                                'logged_in' => true
                );
                $this->session->set_userdata($user_data);
                $this->session->set_flashdata('user_loggedin', 'You are now logged in');
                redirect('mdashboard');
            }
            else{
                $this->session->set_flashdata('login_failed', 'Login is invalid');
                redirect('mhome/index');
            }
        }
    }
    
    public function logout(){
        $dataakun = array(
                        'logged_in',
                        'user_id',
                        'username',
                        'password',
                        'fullname',
                        'level');
        $this->session->unset_userdata($dataakun);
        $this->session->set_flashdata('user_loggedout', 'You are now logged out');
        redirect('mpublic');
    }
    
    public function home($page = 'home'){
        if(!file_exists(APPPATH.'views/pages/master/'.$page.'.php')){
			show_404();
		}
        
        $data = $this->arianagr->get_data_mas();
        $data = array('informasi' => $data);
        
        $this->load->view('templates/header');
        $this->load->view('pages/master/'.$page, $data);
        $this->load->view('templates/footer');
    }
    
    public function edit_status($id_status){   
        if ($this->session->userdata('logged_in')==TRUE){
            if ($this->session->userdata('level')!='user'){
                $yusah = $this->arianagr->get_where('status', array('id_status' => $id_status));
                $data = array(
                            'id_status' => $yusah[0]['id_status'],
                            'id_pengajuan' => $yusah[0]['id_pengajuan'],
                            'id_driver' => $yusah[0]['id_driver'],        
                            'id_mobil' => $yusah[0]['id_mobil'],
                            'tglkembali' => $yusah[0]['tglkembali'],
                            'jamberangkat' => $yusah[0]['jamberangkat'],
                            'jampulang' => $yusah[0]['jampulang'],
                            'statusx' => $yusah[0]['statusx'],
                        );
                $data['getdriver'] = $this->arianagr->get_driver();
                $data['getmobil'] = $this->arianagr->get_mobil();
                $data['getpengaju'] = $this->arianagr->get_pengaju();
                $this->load->view('templates/header');
                $this->load->view('pages/master/home_update', $data);
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
    
    public function update_status(){
        $id_status = $this->input->post('id_status');
        $fullname_driver = $this->input->post('fullname_driver');
        $plat_mobil = $this->input->post('plat_mobil');
        $peminjam = $this->input->post('peminjam');
        $tglpinjam = $this->input->post('tglpinjam');
        $tglkembali = $this->input->post('tglkembali');
        $jamberangkat = $this->input->post('jamberangkat');
        $jampulang = $this->input->post('jampulang');
        $tujuan = $this->input->post('tujuan');
        $keperluan = $this->input->post('keperluan');
        $statusx = $this->input->post('statusx');
        $km_awal = $this->input->post('km_awal');
        $km_akhir = $this->input->post('km_akhir');
        $bbm = $this->input->post('bbm');
        
        $data = array(
                    'id_pengajuan' => $peminjam,
                    'id_driver' => $fullname_driver,
                    'id_mobil' => $plat_mobil,
                    'tglkembali' => $tglkembali,
                    'jamberangkat' => $jamberangkat,
                    'jampulang' => $jampulang,
                    'statusx' => $statusx,
                    'bbm' => $bbm
                );
        $where = array(
                    'id_status' => $id_status,
                );
        $res = $this->arianagr->update_data('status', $data, $where);
        
        if ($statusx == 'Selesai') {
            $this->db->query("UPDATE driver SET status_driver='Ada' WHERE id_driver='$fullname_driver' ");
            $this->db->query("UPDATE mobil SET status_mobil='Ada' WHERE id_mobil='$plat_mobil' ");
            $this->db->query("UPDATE mobil SET km_awal='$km_awal' WHERE id_mobil='$plat_mobil' ");
            $this->db->query("UPDATE mobil SET km_akhir='$km_akhir' WHERE id_mobil='$plat_mobil' ");
        }
        if ($res>0){
            redirect(base_url('mhome/home'));
        }
    }
        
    public function delete_status($id_status){
        if ($this->session->userdata('logged_in')==TRUE){
            if ($this->session->userdata('level')!='user'){
                $id_status = array('id_status' => $id_status);
                $this->arianagr->delete_data('status', $id_status);
                redirect(base_url('mhome'));
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