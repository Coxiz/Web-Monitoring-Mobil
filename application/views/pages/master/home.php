    <div class="panel-header panel-header-sm">
        <!--div id="container"></div-->
    </div>

    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-chart">
                    <div class="card-header">
                        <h4 class="card-title">Status Kendaraan Dinas</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="examplescroll">
                                <thead class="text-primary">
                                    <th>Driver</th>
                                    <th>Jenis</th>
                                    <th>Plat</th>
                                    <th>Peminjam</th>
                                    <th>Tgl Pinjam</th>
                                    <th>Tgl Kembali</th>
                                    <th>Jam Brkt</th>
                                    <th>Jam Plg</th>
                                    <th>Tujuan</th>
                                    <th>Keperluan</th>
                                    <th>Status</th>
                                    <?php if($this->session->userdata('level')=='superadmin') : ?>
                                    <th>Aksi</th>
                                    <?php endif ?>
                                    <?php if($this->session->userdata('level')=='admin') : ?>
                                    <th>Aksi</th>
                                    <?php endif ?>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach ($informasi as $user_data){?>
                                    <tr>
                                        <td><?php echo $user_data['fullname_driver']; ?></td>
                                        <td><?php echo $user_data['jenismobil']; ?></td>
                                        <td><?php echo $user_data['plat_mobil']; ?></td>
                                        <td><?php echo $user_data['peminjam']; ?></td>
                                        <td><?php echo $user_data['tglpinjam']; ?></td>
                                        <td><?php echo $user_data['tglkembali']; ?></td>
                                        <td><?php echo $user_data['jamberangkat']; ?></td>
                                        <td><?php echo $user_data['jampulang']; ?></td>
                                        <td><?php echo $user_data['tujuan']; ?></td>
                                        <td><?php echo $user_data['keperluan']; ?></td>
                                        <td><b><?php echo $user_data['statusx']; ?></b></td>
                                            <?php if($this->session->userdata('level')=='superadmin') : ?>
                                        <td class="text-center"><a href="<?php echo base_url('mhome/edit_status/').$user_data['id_status']; ?>"><i class="now-ui-icons design-2_ruler-pencil"></i></a></td>
                                            <?php endif ?>
                                            <?php if($this->session->userdata('level')=='admin') : ?>
                                        <td class="text-center"><a href="<?php echo base_url('mhome/edit_status/').$user_data['id_status']; ?>"><i class="now-ui-icons design-2_ruler-pencil"></i></a></td>
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