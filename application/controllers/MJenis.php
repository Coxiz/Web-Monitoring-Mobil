<?php if ( !defined('BASEPATH')) exit('You dont have privilage to access this file');

class MJenis extends CI_CONTROLLER{
	public function __construct(){
		parent:: __construct();
		$this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
		$this->load->model('model_data_user', 'arianagr');
	}
    
    public function index(){
        $data = $this->arianagr->get_data('jenismobil');
        $jj = $this->arianagr->jumlah_jenis();
        $data = array('informasi' => $data, 'jumlahjenis' => $jj);
        
        $this->load->view('templates/header');
        $this->load->view('pages/master/data_jenis', $data);
        $this->load->view('templates/footer');
    }
    
    public function insert(){
        if ($this->session->userdata('logged_in')==TRUE){
            if ($this->session->userdata('level')=='superadmin'){
                $this->form_validation->set_rules('kode_jenismobil', 'Kode_jenismobil', 'required');
                $this->form_validation->set_rules('jenismobil', 'Jenismobil', 'required');
                $this->form_validation->set_rules('jumlah_jenismobil', 'required');

                if ($this->form_validation->run() === FALSE){
                    $this->load->view('templates/header');
                    $this->load->view('pages/master/data_jenis_insert');
                    $this->load->view('templates/footer');
                }
                else{
                    $this->insert_jenis();
                }
            }
            elseif ($this->session->userdata('level')=='admin'){
                $this->form_validation->set_rules('kode_jenismobil', 'Kode_jenismobil', 'required');
                $this->form_validation->set_rules('jenismobil', 'Jenismobil', 'required');
                $this->form_validation->set_rules('jumlah_jenismobil', 'required');

                if ($this->form_validation->run() === FALSE){
                    $this->load->view('templates/header');
                    $this->load->view('pages/master/data_jenis_insert');
                    $this->load->view('templates/footer');
                }
                else{
                    $this->insert_jenis();
                }
            }
            else{
                redirect(base_url('mdashboard'));
            }
        }
        else{
            redirect(base_url('mhome'));
        }
    }
    
    public function insert_jenis(){
        $data = array(
                    'kode_jenismobil' => $this->input->post('kode_jenismobil'),
                    'jenismobil' => $this->input->post('jenismobil'),
                    'jumlah_jenismobil' => $this->input->post('jumlah_jenismobil')
                );
        $data = $this->arianagr->set_data('jenismobil', $data);
        redirect(base_url('mjenis'));
    }
    
    public function update_jenis(){
        $id_jenismobil = $this->input->post('id_jenismobil');
        $kode_jenismobil = $this->input->post('kode_jenismobil');
        $jenismobil = $this->input->post('jenismobil');
        $jumlah_jenismobil = $this->input->post('jumlah_jenismobil');
        $data = array(
                    'kode_jenismobil' => $kode_jenismobil,
                    'jenismobil' => $jenismobil,
                    'jumlah_jenismobil' => $jumlah_jenismobil
                );
        $where = array(
                    'id_jenismobil' => $id_jenismobil,
                );
        $res = $this->arianagr->update_data('jenismobil', $data, $where);
        if ($res>0){
            redirect(base_url('mjenis'));
        }
    }
    
    public function edit_jenis($id_jenismobil){
        if ($this->session->userdata('logged_in')==TRUE){
            if ($this->session->userdata('level')!='user'){
                $yusah = $this->arianagr->get_where('jenismobil', array('id_jenismobil' => $id_jenismobil));
                $data = array(
                            'id_jenismobil' => $yusah[0]['id_jenismobil'],
                            'kode_jenismobil' => $yusah[0]['kode_jenismobil'],
                            'jenismobil' => $yusah[0]['jenismobil'],
                            'jumlah_jenismobil' => $yusah[0]['jumlah_jenismobil'],
                        );
                $this->load->view('templates/header');
                $this->load->view('pages/master/data_jenis_update', $data);
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
        
    public function delete_jenis($id_jenismobil){
        if ($this->session->userdata('logged_in')==TRUE){
            if ($this->session->userdata('level')!='user'){
                $id_jenismobil = array('id_jenismobil' => $id_jenismobil);
                $this->arianagr->delete_data('jenismobil', $id_jenismobil);
                redirect(base_url('mjenis'));
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