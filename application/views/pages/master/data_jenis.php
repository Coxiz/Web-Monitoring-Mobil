    <div class="panel-header panel-header-sm">
    </div>    
    <div class="content">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card card-chart">
                    <div class="card-header">             
                        <h4 class="card-title">Daftar Jenis Kendaraan</h4>
                        <?php if($this->session->userdata('logged_in')==TRUE) : ?>
                            <?php if($this->session->userdata('level')!='user') : ?>
                                <a href="<?php echo base_url('mjenis/insert')?>" style="color: white;">
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
                                    <th>Kode Jenis</th>
                                    <th>Jenis Kendaraan</th>
                                    <th class="text-center">Jumlah</th>
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
                                        <td><?php echo $user_data['kode_jenismobil']; ?></td>
                                        <td><?php echo $user_data['jenismobil']; ?></td>
                                        <td class="text-center"><?php echo $user_data['jumlah_jenismobil']; ?></td>
                                        <?php if($this->session->userdata('level')=='superadmin') : ?>
                                        <td class="text-center"><a href="<?php echo base_url('mjenis/edit_jenis/').$user_data['id_jenismobil']; ?>"><i class="now-ui-icons design-2_ruler-pencil"></i></a> | <a href="<?php echo base_url('mjenis/delete_jenis/').$user_data['id_jenismobil']; ?>" onclick="return confirm('Yakin ingin hapus data?')"><i class="now-ui-icons files_box"></i></a></td>
                                        <?php endif ?>
                                        <?php if($this->session->userdata('level')=='admin') : ?>
                                        <td class="text-center"><a href="<?php echo base_url('mjenis/edit_jenis/').$user_data['id_jenismobil']; ?>"><i class="now-ui-icons design-2_ruler-pencil"></i></a></td>
                                        <?php endif ?>
                                    </tr>
                                    <?php }?>
                                </tbody>
                                <tfoot class="text-primary">
                                    <tr>
                                        <th>Total</th>
                                        <th></th>
                                        <th class="text-center">
                                            <?php echo $jumlahjenis;?>
                                        </th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>
        </div>
    </div>