    <div class="panel-header panel-header-sm">
    </div>    
    <div class="content">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card card-chart">
                    <div class="card-header">     
                        <h4 class="card-title">Daftar Driver</h4>
                        <?php if($this->session->userdata('logged_in')==TRUE) : ?>
                            <?php if($this->session->userdata('level')!='user') : ?>
                                <a href="<?php echo base_url('mdriver/insert')?>" style="color: white;">
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
                                <thead class=" text-primary">
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>Telepon</th>
                                    <th>Status</th>
                                    <?php if($this->session->userdata('level')=='superadmin') : ?>
                                    <th class="text-center">Aksi</th>
                                    <?php endif ?>
                                    <?php if($this->session->userdata('level')=='admin') : ?>
                                    <th class="text-center">Aksi</th>
                                    <?php endif ?>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach ($informasi as $user_data){?>
                                    <tr>
                                        <td><?php echo $user_data['nip_driver']; ?></td>
                                        <td><?php echo $user_data['fullname_driver']; ?></td>
                                        <td><?php echo $user_data['phone_driver']; ?></td>
                                        <td><?php echo $user_data['status_driver']; ?></td>
                                            <?php if($this->session->userdata('level')=='superadmin') : ?>
                                        <td class="text-center"><a href="<?php echo base_url('mdriver/edit_driver/').$user_data['id_driver']; ?>"><i class="now-ui-icons design-2_ruler-pencil"></i></a> | <a href="<?php echo base_url('mdriver/delete_driver/').$user_data['id_driver']; ?>" onclick="return confirm('Yakin ingin hapus data?')"><i class="now-ui-icons files_box"></i></a></td>
                                            <?php endif ?>
                                            <?php if($this->session->userdata('level')=='admin') : ?>
                                        <td class="text-center"><a href="<?php echo base_url('mdriver/edit_driver/').$user_data['id_driver']; ?>"><i class="now-ui-icons design-2_ruler-pencil"></i></a></td>
                                            <?php endif ?>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>