    <div class="panel-header panel-header-sm">
    </div>

    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-chart">
                    <div class="card-header">
                        <h4 class="card-title">History</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="history" class="table table-striped table-bordered" style="width: 100%">
                                <thead class="text-primary">
                                    <tr>
                                        <th>Waktu</th>
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
                                        <th>Km. Awal</th>
                                        <th>Km. Akhir</th>
                                        <th>BBM</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($informasi as $user_data){?>
                                    <tr>
                                        
                                        <td><?php echo $user_data['waktu']; ?></td>
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
                                        <td><?php echo $user_data['km_awal']; ?></td>
                                        <td><?php echo $user_data['km_akhir']; ?></td>
                                        <td><?php echo $user_data['bbm']; ?></td>
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