
    <div class="panel-header panel-header-sm">        
        <?php if ($this->session->flashdata('msg')) : ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('msg').'</p>' ?>
        <?php endif; ?>
    </div>    
    <!-- Konten -->
    <div class="content">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card card-chart">
                    <div class="card-header">
                        <h4 class="card-title">Daftar User</h4>
                        <?php if($this->session->userdata('logged_in')==TRUE) : ?>
                            <?php if($this->session->userdata('level')=='superadmin') : ?>
                                <a href="<?php echo base_url('muser/insert')?>" style="color: white;">
                                    <button type="button" class="btn btn-round btn-primary btn-group-justified">
                                        Tambah Data
                                    </button>
                                </a>
                            <?php endif ?>
                            <?php if($this->session->userdata('level')=='admin') : ?>
                                <a href="<?php echo base_url('muser/insert')?>" style="color: white;">
                                    <button type="button" class="btn btn-round btn-primary btn-group-justified">
                                        Tambah Data
                                    </button>
                                </a>
                            <?php endif ?>
                        <?php endif ?>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Telepon</th>
                                    <th>Level</th>
                                <?php if($this->session->userdata('level')=='superadmin') : ?>
                                    <th>Aksi</th>
                                <?php endif ?>
                                </thead>
                                <tbody>
                                <?php
                                    foreach ($informasi as $user_data){?>
                                    <tr>
                                        <td><?php echo $user_data['username_user']; ?></td>
                                        <td><?php echo $user_data['password_user']; ?></td>
                                        <td><?php echo $user_data['fullname_user']; ?></td>
                                        <td><?php echo $user_data['email_user']; ?></td>
                                        <td><?php echo $user_data['phone_user']; ?></td>
                                        <td><?php echo $user_data['level_user']; ?></td>
                                    <?php if($this->session->userdata('level')=='superadmin') : ?>
                                        <td><a href="<?php echo base_url('muser/edit_user/').$user_data['id_user']; ?>"><i class="now-ui-icons design-2_ruler-pencil"></i></a> | <a href="<?php echo base_url('muser/delete_user/').$user_data['id_user']; ?>" onclick="return confirm('Yakin ingin hapus data?')"><i class="now-ui-icons files_box"></i></a></td>
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