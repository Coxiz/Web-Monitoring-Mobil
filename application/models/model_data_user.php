<?php
	class Model_data_user extends CI_Model{
		public function __construct(){
            parent:: __construct();
			$this->load->database();
            $this->load->helper('url');
		}
        
        //Fungsi Login
        public function login($username, $password){
            $this->db->where('username_user', $username);
            $this->db->where('password_user', $password);
            $result = $this->db->get('user');
            return $result->row_array();
        }
        
        //Fungsi Umum        
		public function get_data($table){
            $res = $this->db->get($table);
            return $res->result_array();
		}
        public function set_data($table, $data){
            $res = $this->db->insert($table, $data);
            return $res;
        }   
        public function get_where($table, $data){
            $res=$this->db->get_where($table, $data);
            return $res->result_array();
        }
        public function update_data($table, $data, $where){
            $res = $this->db->update($table, $data, $where);
            return $res;
        }
        public function delete_data($table, $where){
            $res = $this->db->delete($table, $where);
            return $res;
        }
        
        //Fungsi Meubah Handak Tujuan
        public function get_tujuan_from_status(){
            $this->db->select('*');
            $this->db->from('status');
            $this->db->join('pengajuan', 'status.id_pengajuan = pengajuan.id_pengajuan');
            $this->db->join('driver', 'status.id_driver = driver.id_driver');
            $this->db->join('mobil', 'status.id_mobil = mobil.id_mobil');
            $this->db->where('id_pengajuan');
        }
            
        //Fungsi Status
        public function get_data_mas(){
            $res = $this->db->query("SELECT id_status, fullname_driver, phone_driver, nama_jabatan, jenismobil, plat_mobil, peruntukan_mobil, peminjam, tglpinjam, tglkembali, jamberangkat, jampulang, tujuan, statusx, keperluan FROM status NATURAL JOIN mobil NATURAL JOIN driver NATURAL JOIN jabatan NATURAL JOIN jenismobil NATURAL JOIN pengajuan WHERE statusx='Belum Selesai'");
            return $res->result_array();
        }
        public function get_data_mas_dua(){
            $this->db->select('id_status, driver.id_driver, mobil.id_mobil, jenismobil.id_jenismobil, fullname_driver, phone_driver, plat_mobil, peruntukan_mobil, peminjam, tglpinjam, tglkembali, jamberangkat, jampulang, tujuan, keperluan, statusx');
            $this->db->from('status');
            $this->db->join('driver', 'status.id_driver = driver.id_driver');
            $this->db->join('mobil', 'status.id_mobil = mobil.id_mobil');
            $this->db->join('jenismobil', 'status.id_jenismobil = jenismobil.id_jenismobil');
            //$this->db->join('jabatan', 'status.id_jabatan = jabatan.id_jabatan');
            $this->db->join('pengajuan', 'status.id_pengajuan = pengajuan.id_pengajuan');
            $this->db->where('statusx', 'Belum Selesai');
            $res = $this->db->get();
            return $res->result_array();       
        }
        public function get_data_status(){
            $this->db->select('*');
            $this->db->from('status');
            $this->db->join('driver', 'status.id_driver = driver.id_driver');
            $this->db->join('mobil', 'status.id_mobil = mobil.id_mobil');            
            $query = $this->db->get();
            return $query->result_array();
        }
        
        //Fungsi Menu Mobil
        public function get_data_mobil(){
            $this->db->select('*');
            $this->db->from('mobil');
            $this->db->join('jabatan', 'mobil.id_jabatan = jabatan.id_jabatan');
            $this->db->join('jenismobil', 'mobil.id_jenismobil = jenismobil.id_jenismobil');
            $query = $this->db->get();
            return $query->result_array();
        }
        public function get_data_mobil_available(){
            $this->db->select('*');
            $this->db->from('mobil');
            $this->db->join('jabatan', 'mobil.id_jabatan = jabatan.id_jabatan');
            $this->db->join('jenismobil', 'mobil.id_jenismobil = jenismobil.id_jenismobil');
            $this->db->where('status_mobil', 'Ada');
            $query = $this->db->get();
            return $query->result_array();
        }
        
        //Fungsi Menu Driver
        public function get_data_driver_available(){
            $this->db->select('*');
            $this->db->from('driver');
            $this->db->where('status_driver', 'Ada');
            $query = $this->db->get();
            return $query->result_array();
        }
        
        //Fungsi Menu Pengajuan
        public function get_data_pengajuan(){
            $this->db->select('id_pengajuan, peminjam, bidang, jumlahpenumpang, tujuan, keperluan, tglpinjam, lamapinjam, status_pengajuan, fullname_user');
            $this->db->from('pengajuan');
            $this->db->join('user', 'pengajuan.id_user = user.id_user');
            $query = $this->db->get();
            return $query->result_array();
        }
        public function get_data_pengajuan_unapproved(){
            $this->db->select('id_pengajuan, peminjam, bidang, jumlahpenumpang, tujuan, keperluan, tglpinjam, lamapinjam, status_pengajuan, fullname_user');
            $this->db->from('pengajuan');
            $this->db->join('user', 'pengajuan.id_user = user.id_user');
            $this->db->where('status_pengajuan', 'Belum Disetujui');
            $query = $this->db->get();
            return $query->result_array();
        }
        public function get_data_pengajuan_nya(){
            $this->db->select('id_pengajuan, peminjam, bidang, jumlahpenumpang, tujuan, keperluan, tglpinjam, lamapinjam, status_pengajuan, fullname_user');
            $this->db->from('pengajuan');
            $this->db->join('user', 'pengajuan.id_user = user.id_user');
            $this->db->where('fullname_user', $this->session->userdata('fullname'));
            $query = $this->db->get();
            return $query->result_array();
        }
        
        //Fungsi Menu User
        public function get_akun(){
            $this->db->select('*');
            $this->db->from('user');
            $this->db->where('level_user', 'user');
            $query = $this->db->get();
            return $query->result_array();
        }
        
        //Fungsi Menu History
        public function get_history(){
            $res = $this->db->query("SELECT id_history, waktu, id_status, fullname_driver, phone_driver, nama_jabatan, jenismobil, plat_mobil, peruntukan_mobil, peminjam, tglpinjam, tglkembali, jamberangkat, jampulang, tujuan, keperluan, km_awal, km_akhir, bbm FROM history NATURAL JOIN status NATURAL JOIN mobil NATURAL JOIN driver NATURAL JOIN jabatan NATURAL JOIN jenismobil NATURAL JOIN pengajuan");
            return $res->result_array();
        }
        
        //Fungsi Counter
        public function count_row_status(){
            $this->db->from('status');
            $this->db->where('statusx','Belum Selesai');
            return $this->db->count_all_results();
        }
        public function count_row_mobil_available(){
            $this->db->from('mobil');
            $this->db->where('status_mobil','Ada');
            return $this->db->count_all_results();
        }
        public function count_row_driver_available(){
            $this->db->from('driver');
            $this->db->where('status_driver','Ada');
            return $this->db->count_all_results();
        }
        public function count_row_pengajuan(){
            $this->db->from('pengajuan');
            $this->db->where('status_pengajuan','Belum Disetujui');
            return $this->db->count_all_results();
        }
        
        //Fungsi Get Combobox
        //Home
        public function get_pengaju(){
            $this->db->select('id_pengajuan, peminjam');
            $this->db->from('pengajuan');            
            $query = $this->db->get();
            return $query->result();
        }
        public function get_tujuan(){
            $this->db->select('id_pengajuan, tujuan');
            $this->db->from('pengajuan');            
            $query = $this->db->get();
            return $query->result();
        }
        //Car
        public function get_jenis(){
            $this->db->select('id_jenismobil, jenismobil');
            $this->db->from('jenismobil');
            $query = $this->db->get();
            return $query->result();
        }
        public function get_jabatan(){
            $this->db->select('id_jabatan, nama_jabatan');
            $this->db->from('jabatan');
            $query = $this->db->get();
            return $query->result();
        }
        //Status
        public function get_driver(){
            $this->db->select('id_driver, fullname_driver');
            $this->db->from('driver');
            $query = $this->db->get();
            return $query->result();
        }
        public function get_mobil(){
            $this->db->select('id_mobil, plat_mobil');
            $this->db->from('mobil');
            $query = $this->db->get();
            return $query->result();
        }
        //Pengajuan
        public function get_driver_available(){
            $this->db->select('id_driver, fullname_driver');
            $this->db->from('driver');
            $this->db->where('status_driver', 'Ada');
            $query = $this->db->get();
            return $query->result();
        }
        public function get_mobil_available(){
            $this->db->select('mobil.id_mobil, mobil.plat_mobil, jenismobil.jenismobil');
            $this->db->from('mobil');
            $this->db->join('jenismobil', 'mobil.id_jenismobil = jenismobil.id_jenismobil');
            $this->db->where('status_mobil', 'Ada');
            $query = $this->db->get();
            return $query->result_array();
        }
        
        //Fungsi Jumlah Jenis Mobil
        public function jumlah_jenis(){
            $query = $this->db->query("SELECT SUM(jumlah_jenismobil) AS NUM FROM jenismobil");
            $q = $query->row();
            return $q->NUM;
        }
        
        //Fungsi Dari Dashboard
        public function get_driver_unavailable(){
            $query = $this->db->query('SELECT nip_driver, fullname_driver, phone_driver, status_driver FROM driver WHERE fullname_driver NOT IN (SELECT fullname_driver, statusx FROM status WHERE statusx="Belum Selesai")');
        }
        
        //Fungsi History
        public function save_data_history($data){
            $query = $this->db->insert('history', $data);
        }
        
        //Fungsi lain-lain
        public function save_data($data){
            $query = $this->db->insert('status', $data);
            if ($query==TRUE){
                return true;
            }
            else{
                return false;
            }
        }
	}