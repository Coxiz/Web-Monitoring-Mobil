<?php if ( !defined('BASEPATH')) exit('You dont have privilage to access this file');

class MPengajuan extends CI_CONTROLLER{
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
                $avx = $this->input->get('p');
                if ($avx == 'avx') {
                    $data = $this->arianagr->get_data_pengajuan_unapproved();
                } else {
                    $data = $this->arianagr->get_data_pengajuan();
                }
                
                $data = array('informasi' => $data);

                $this->load->view('templates/header');
                $this->load->view('pages/master/pengajuan_tampil', $data);
                $this->load->view('templates/footer');
            }
            elseif ($this->session->userdata('level')=='admin'){
                $avx = $this->input->get('p');
                if ($avx == 'avx') {
                    $data = $this->arianagr->get_data_pengajuan_unapproved();
                } else {
                    $data = $this->arianagr->get_data_pengajuan();
                }
                
                $data = array('informasi' => $data);

                $this->load->view('templates/header');
                $this->load->view('pages/master/pengajuan_tampil', $data);
                $this->load->view('templates/footer');
            }
            else{
                $this->form_validation->set_rules('peminjam', 'Peminjam', 'required');
                $this->form_validation->set_rules('bidang', 'Bidang', 'required');
                $this->form_validation->set_rules('jumlahpenumpang', 'Jumlahpenumpang', 'required');
                $this->form_validation->set_rules('tujuan', 'Tujuan', 'required');
                $this->form_validation->set_rules('keperluan', 'Keperluan', 'required');
                $this->form_validation->set_rules('tglpinjam', 'Tglpinjam', 'required');
                $this->form_validation->set_rules('lamapinjam', 'Lamapinjam', 'required');
        
                if ($this->form_validation->run() === FALSE){
                    $this->load->view('templates/header');
                    $this->load->view('pages/master/pengajuan');
                    $this->load->view('templates/footer');
                }
                else{
                    $this->insert_pengajuan();
                }
            }
        }
        else{
            redirect(base_url('mhome'));
        }
    }
    
    public function tampilkan(){
        if ($this->session->userdata('logged_in')==TRUE){
            if ($this->session->userdata('level')!='superadmin'){
                $data = $this->arianagr->get_data_pengajuan_nya();
                $data = array('informasi' => $data);

                $this->load->view('templates/header');
                $this->load->view('pages/master/pengajuan_tampil', $data);
                $this->load->view('templates/footer');
            }
        }
        else{
            redirect(base_url('mhome'));
        }
    }
    
    public function insert_pengajuan(){
        $data = array(
                    'id_user' => $this->session->userdata('user_id'),
                    'peminjam' => $this->input->post('peminjam'),
                    'bidang' => $this->input->post('bidang'),
                    'jumlahpenumpang' => $this->input->post('jumlahpenumpang'),
                    'tujuan' => $this->input->post('tujuan'),
                    'keperluan' => $this->input->post('keperluan'),
                    'tglpinjam' =>  $this->input->post('tglpinjam'),
                    'lamapinjam' => $this->input->post('lamapinjam'),
                    'status_pengajuan' => 'Belum Disetujui'
                );
        $save = $this->arianagr->set_data('pengajuan',$data);
        redirect(base_url('mpengajuan/tampilkan'));
    }
    
    public function accept($id_pengajuan){
        if ($this->session->userdata('logged_in')==TRUE){
            if ($this->session->userdata('level')=='superadmin'){
                $yusah = $this->arianagr->get_where('pengajuan', array('id_pengajuan' => $id_pengajuan));
                $data = array(
                            'id_pengajuan' => $yusah[0]['id_pengajuan'],
                            'fullname_user' => $yusah[0]['id_user'],
                            'peminjam' => $yusah[0]['peminjam'],
                            'bidang' => $yusah[0]['bidang'],
                            'jumlahpenumpang' => $yusah[0]['jumlahpenumpang'],
                            'tujuan' => $yusah[0]['tujuan'],
                            'keperluan' => $yusah[0]['keperluan'],
                            'tglpinjam' => $yusah[0]['tglpinjam'],
                            'lamapinjam' => $yusah[0]['lamapinjam'],
                            'status_pengajuan' => $yusah[0]['status_pengajuan'],
                        );
                $data['getdriver'] = $this->arianagr->get_driver_available();
                $data['getmobil'] = $this->arianagr->get_mobil_available();
                $this->load->view('templates/header');
                $this->load->view('pages/master/pengajuan_konfirmasi', $data);
                $this->load->view('templates/footer');
            }
            elseif ($this->session->userdata('level')=='admin'){
                $yusah = $this->arianagr->get_where('pengajuan', array('id_pengajuan' => $id_pengajuan));
                $data = array(
                            'id_pengajuan' => $yusah[0]['id_pengajuan'],
                            'fullname_user' => $yusah[0]['id_user'],
                            'peminjam' => $yusah[0]['peminjam'],
                            'bidang' => $yusah[0]['bidang'],
                            'jumlahpenumpang' => $yusah[0]['jumlahpenumpang'],
                            'tujuan' => $yusah[0]['tujuan'],
                            'keperluan' => $yusah[0]['keperluan'],
                            'tglpinjam' => $yusah[0]['tglpinjam'],
                            'lamapinjam' => $yusah[0]['lamapinjam'],
                            'status_pengajuan' => $yusah[0]['status_pengajuan'],
                        );
                $data['getdriver'] = $this->arianagr->get_driver_available();
                $data['getmobil'] = $this->arianagr->get_mobil_available();
                $this->load->view('templates/header');
                $this->load->view('pages/master/pengajuan_konfirmasi', $data);
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
    
    public function konfirmasi(){
        if($this->input->post('tglpinjam')){
            $id_pengajuan = $this->input->post('id_pengajuan');
                $data = array(
                            'tglpinjam' => $this->input->post('tglpinjam'),
                            'status_pengajuan' => 'Disetujui'
                        );
                $where = array(
                        'id_pengajuan' => $id_pengajuan,
                    );
                $res = $this->arianagr->update_data('pengajuan', $data, $where);
        }
        
            $data = array(
                        'id_pengajuan' => $this->input->post('id_pengajuan'),
                        'id_driver' => $this->input->post('fullname_driver'),
                        'id_mobil' => $this->input->post('plat_mobil'),
                        'tglkembali' => $this->input->post('tglkembali'),
                        'jamberangkat' => $this->input->post('jamberangkat'),
                        'jampulang' => $this->input->post('jampulang'),
                        'statusx' => 'Belum Selesai'                    
                    );
            $save = $this->arianagr->save_data($data);
            if ($save==true){
                $aku = $this->db->select('max(id_status) as num')->get('status');
                $ikam = $aku->row();
                $data = array(
                            'id_history' => "AM".date('dmYHis'),
                            'id_status' => $ikam->num,
                            'waktu' => date('d-m-Y - H:i:s')
                        );
                $this->arianagr->save_data_history($data);
                $ddd = $this->input->post('fullname_driver');
                $eee = $this->input->post('plat_mobil');
                //$fff = $this->input->post('status_pengajuan');
                $this->db->query("UPDATE driver SET status_driver='Tidak Ada' WHERE id_driver='$ddd' ");
                $this->db->query("UPDATE mobil SET status_mobil='Tidak Ada' WHERE id_mobil='$eee' ");
                //$this->db->query("UPDATE pengajuan SET status_pengajuan='Disetujui' WHERE id_pengajuan='$fff'");
            }
            redirect(base_url('mhome'));
    }
    
    public function refuse($id_pengajuan){
        if ($this->session->userdata('logged_in')==TRUE){
            if ($this->session->userdata('level')!='user'){
                $id_pengajuan = array('id_pengajuan' => $id_pengajuan);
                $this->arianagr->delete_data('pengajuan', $id_pengajuan);
                redirect(base_url('mpengajuan'));
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