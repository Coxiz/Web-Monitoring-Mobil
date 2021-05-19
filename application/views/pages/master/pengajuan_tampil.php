    <div class="panel-header panel-header-sm">
    </div>    
    <!-- Konten -->
    <div class="content">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card card-chart">
                    <div class="card-header">
                        <h4 class="card-title">Daftar Pengajuan</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="examplescroll">
                                <thead class="text-primary">
                                    <th>Pengaju</th>
                                    <th>Peminjam</th>
                                    <th>Bidang</th>
                                    <th>Penumpang</th>
                                    <th>Tujuan</th>
                                    <th>Keperluan</th>
                                    <th>Tgl Pinjam</th>
                                    <th>Lama Pinjam</th>
                                    <th>Status</th>
                                <?php if ($this->session->userdata('logged_in')==TRUE) : ?>
                                    <?php if ($this->session->userdata('level')=='superadmin'):?>
                                    <th>Aksi</th>
                                    <?php endif ?>
                                    <?php if ($this->session->userdata('level')=='admin'):?>
                                    <th>Aksi</th>
                                    <?php endif ?>
                                <?php endif?>
                                </thead>
                                <tbody>
                                <?php
                                    foreach ($informasi as $user_data){?>
                                    <tr>
                                        <td><?php echo $user_data['fullname_user']; ?></td>
                                        <td><?php echo $user_data['peminjam']; ?></td>
                                        <td><?php echo $user_data['bidang']; ?></td>
                                        <td><?php echo $user_data['jumlahpenumpang']; ?></td>
                                        <td><?php echo $user_data['tujuan']; ?></td>
                                        <td><?php echo $user_data['keperluan']; ?></td>
                                        <td><?php echo $user_data['tglpinjam']; ?></td>
                                        <td><?php echo $user_data['lamapinjam']; ?></td>
                                        <td><?php echo $user_data['status_pengajuan']; ?></td>
                                            <?php if($this->session->userdata('level')=='superadmin') : ?>
                                        <td class="text-center"><a href="<?php echo base_url('mpengajuan/accept/').$user_data['id_pengajuan']; ?>"><i class="now-ui-icons ui-1_check"></i></a> | <a href="<?php echo base_url('mpengajuan/refuse/').$user_data['id_pengajuan']; ?>" onclick="return confirm('Tolak pengajuan?')"><i class="now-ui-icons ui-1_simple-remove"></i></a></td>
                                            <?php endif ?>
                                            <?php if($this->session->userdata('level')=='admin') : ?>
                                        <td class="text-center"><a href="<?php echo base_url('mpengajuan/accept/').$user_data['id_pengajuan']; ?>"><i class="now-ui-icons ui-1_check"></i></a> | <a href="<?php echo base_url('mpengajuan/refuse/').$user_data['id_pengajuan']; ?>" onclick="return confirm('Tolak pengajuan?')"><i class="now-ui-icons ui-1_simple-remove"></i></a></td>
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