<?php if ( !defined('BASEPATH')) exit('You dont have privilage to access this file');

class MCar extends CI_CONTROLLER{
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
            $data = $this->arianagr->get_data_mobil_available();
        } else {
            $data = $this->arianagr->get_data_mobil();
        }
        $data = array('informasi' => $data); 
        
        $this->load->view('templates/header');
        $this->load->view('pages/master/data_car', $data);
        $this->load->view('templates/footer');
    }
    
    public function insert(){
        if ($this->session->userdata('logged_in')==TRUE){
            if ($this->session->userdata('level')=='superadmin'){
                $data['getjenis'] = $this->arianagr->get_jenis();
                $data['getjabatan'] = $this->arianagr->get_jabatan();
                $this->form_validation->set_rules('plat_mobil', 'Plat_mobil', 'required');
                $this->form_validation->set_rules('jenismobil', 'Jenismobil', 'required');
                $this->form_validation->set_rules('nama_jabatan', 'Nama_jabatan', 'required');
                $this->form_validation->set_rules('peruntukan_mobil', 'Peruntukan_mobil');
                $this->form_validation->set_rules('warna_mobil', 'Warna_mobil');
                $this->form_validation->set_rules('km_awal', 'Km_awal');
                $this->form_validation->set_rules('km_akhir', 'Km_akhir');

                if ($this->form_validation->run() === FALSE){            
                    $this->load->view('templates/header');
                    $this->load->view('pages/master/data_car_insert', $data);
                    $this->load->view('templates/footer');
                }
                else{
                    $this->insert_car();
                }
            }
            elseif ($this->session->userdata('level')=='admin'){
                $data['getjenis'] = $this->arianagr->get_jenis();
                $data['getjabatan'] = $this->arianagr->get_jabatan();
                $this->form_validation->set_rules('plat_mobil', 'Plat_mobil', 'required');
                $this->form_validation->set_rules('jenismobil', 'Jenismobil', 'required');
                $this->form_validation->set_rules('nama_jabatan', 'Nama_jabatan', 'required');
                $this->form_validation->set_rules('peruntukan_mobil', 'Peruntukan_mobil');
                $this->form_validation->set_rules('warna_mobil', 'Warna_mobil');
                $this->form_validation->set_rules('km_awal', 'Km_awal');
                $this->form_validation->set_rules('km_akhir', 'Km_akhir');

                if ($this->form_validation->run() === FALSE){            
                    $this->load->view('templates/header');
                    $this->load->view('pages/master/data_car_insert', $data);
                    $this->load->view('templates/footer');
                }
                else{
                    $this->insert_car();
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
    
    public function insert_car(){
        $data = array(
                    'plat_mobil' => $this->input->post('plat_mobil'),
                    'id_jenismobil' => $this->input->post('jenismobil'),
                    'id_jabatan' => $this->input->post('nama_jabatan'),
                    'peruntukan_mobil' => $this->input->post('peruntukan_mobil'),
                    'warna_mobil' => $this->input->post('warna_mobil'),
                    'km_awal' => $this->input->post('km_awal'),
                    'km_akhir' => $this->input->post('km_akhir')
                );
        $data = $this->arianagr->set_data('mobil', $data);
        
        redirect(base_url('mcar'));
    }
    
    public function update_car(){
        $id_mobil = $this->input->post('id_mobil');
        $plat_mobil = $this->input->post('plat_mobil');
        $jenismobil = $this->input->post('jenismobil');
        $nama_jabatan = $this->input->post('nama_jabatan');
        $peruntukan_mobil = $this->input->post('peruntukan_mobil');
        $warna_mobil = $this->input->post('warna_mobil');
        $km_awal = $this->input->post('km_awal');
        $km_akhir = $this->input->post('km_akhir');
            
        $data = array(
                    'plat_mobil' => $plat_mobil,
                    'id_jenismobil' => $jenismobil,
                    'id_jabatan' => $nama_jabatan,
                    'peruntukan_mobil' => $peruntukan_mobil,
                    'warna_mobil' => $warna_mobil,
                    'km_awal' => $km_awal,
                    'km_akhir' => $km_akhir
                );
        $where = array(
                    'id_mobil' => $id_mobil,
                );
        $res = $this->arianagr->update_data('mobil', $data, $where);
        if ($res>0){
            redirect(base_url('mcar'));
        }
    }
    
    public function edit_car($id_mobil){
        if ($this->session->userdata('logged_in')==TRUE){
            if ($this->session->userdata('level')!='user'){
                $yusah = $this->arianagr->get_where('mobil', array('id_mobil' => $id_mobil));
                $data = array(
                            'id_mobil' => $yusah[0]['id_mobil'],
                            'plat_mobil' => $yusah[0]['plat_mobil'],
                            'id_jenismobil' => $yusah[0]['id_jenismobil'],
                            'id_jabatan' => $yusah[0]['id_jabatan'],
                            'peruntukan_mobil' => $yusah[0]['peruntukan_mobil'],
                            'warna_mobil' => $yusah[0]['warna_mobil'],
                            'km_awal' => $yusah[0]['km_awal'],
                            'km_akhir' => $yusah[0]['km_akhir'],
                        );
                $data['getjenis'] = $this->arianagr->get_jenis();
                $data['getjabatan'] = $this->arianagr->get_jabatan();
                $this->load->view('templates/header');
                $this->load->view('pages/master/data_car_update', $data);
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
        
    public function delete_car($id_mobil){
        if ($this->session->userdata('logged_in')==TRUE){
            if ($this->session->userdata('level')=='superadmin'){
                $id_mobil = array('id_mobil' => $id_mobil);
                $this->arianagr->delete_data('mobil', $id_mobil);
                redirect(base_url('mcar'));
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