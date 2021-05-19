    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card card-chart">
                    <div class="card-header">    
                        <h4 class="card-title">Daftar Kendaraan</h4>
                        <?php if($this->session->userdata('logged_in')==TRUE) : ?>
                            <?php if($this->session->userdata('level')!='user') : ?>
                                <a href="<?php echo base_url('mcar/insert')?>" style="color: white;">
                                    <button type="button" class="btn btn-round btn-primary btn-group-justified">
                                        Tambah Data
                                    </button>
                                </a>
                            <?php endif ?>
                        <?php endif ?>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="examplebiasa">
                                <thead class="text-primary">
                                    <th>Plat</th>
                                    <th>Jenis Kendaraan</th>
                                    <th>Jabatan</th>
                                    <th>Peruntukan</th>
                                    <th>Warna</th>
                                    <th>Status</th>
                                    <?php if($this->session->userdata('level')=='superadmin') : ?>
                                    <th>Km. Awal</th>
                                    <th>Km. Akhir</th>
                                    <?php endif ?>
                                    <?php if($this->session->userdata('level')=='admin') : ?>
                                    <th>Km. Awal</th>
                                    <th>Km. Akhir</th>
                                    <?php endif ?>
                                    <?php if($this->session->userdata('level')=='superadmin') : ?>
                                    <th class="text-center">Aksi</th>
                                    <?php endif ?>
                                    <?php if($this->session->userdata('level')=='admin') : ?>
                                    <th class="text-center">Aksi</th>
                                    <?php endif ?>
                                </thead>
                                <tbody>
                                    <?php foreach ($informasi as $user_data){?>
                                    <tr>
                                        <td><?php echo $user_data['plat_mobil']; ?></td>
                                        <td><?php echo $user_data['jenismobil']; ?></td>
                                        <td><?php echo $user_data['nama_jabatan']; ?></td>
                                        <td><?php echo $user_data['peruntukan_mobil']; ?></td>
                                        <td><?php echo $user_data['warna_mobil']; ?></td>
                                        <td><?php echo $user_data['status_mobil']; ?></td>
                                        <?php if($this->session->userdata('level')=='superadmin') : ?>
                                        <td><?php echo $user_data['km_awal']; ?></td>
                                        <td><?php echo $user_data['km_akhir']; ?></td>
                                        <?php endif ?>
                                        <?php if($this->session->userdata('level')=='admin') : ?>
                                        <td><?php echo $user_data['km_awal']; ?></td>
                                        <td><?php echo $user_data['km_akhir']; ?></td>
                                        <?php endif ?>
                                        <?php if($this->session->userdata('level')=='superadmin') : ?>
                                        <td class="text-center"><a href="<?php echo base_url('mcar/edit_car/').$user_data['id_mobil']; ?>"><i class="now-ui-icons design-2_ruler-pencil"></i></a> | <a href="<?php echo base_url('mcar/delete_car/').$user_data['id_mobil']; ?>"onclick="return confirm('Yakin ingin hapus data?')"><i class="now-ui-icons files_box"></i></a></td>
                                        <?php endif ?>
                                        <?php if($this->session->userdata('level')=='admin') : ?>
                                        <td class="text-center"><a href="<?php echo base_url('mcar/edit_car/').$user_data['id_mobil']; ?>"><i class="now-ui-icons design-2_ruler-pencil"></i></a></td>
                                        <?php endif ?>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>
        </div>
    </div>