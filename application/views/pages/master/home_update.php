    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="card card-chart">
                    <div class="card-header">
                        <h4 class="card-title">Status</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('mhome/update_status')?>" method="POST" class="form-valide">
                            <!-- Validation error-->
                            <?php echo validation_errors(); ?>
                            <!--ID-->
                            <input type="hidden" class="form-control" id="id_status" name="id_status" value="<?php echo $id_status; ?>">
                            <div class="row">
                                <div class="col-md-3 pr-1"></div>
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Nama Driver</label>
                                        <select class="form-control" name="fullname_driver" readonly>
                                            <option value="">Pilih driver</option>
                                            <?php foreach ($getdriver as $key => $row) :?>
                                            <option value="<?php echo $row->id_driver; ?>" <?php if($row->id_driver === $id_driver){echo 'selected';}?> ><?php echo $row->fullname_driver; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 pr-1"></div>
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Plat Kendaraan</label>
                                        <select class="form-control" name="plat_mobil" readonly>
                                            <option value="">Plat</option>
                                            <?php foreach ($getmobil as $key => $row) :?>
                                            <option value="<?php echo $row->id_mobil; ?>" <?php if($row->id_mobil === $id_mobil){echo 'selected';}?> ><?php echo $row->plat_mobil; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 pr-1"></div>
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Peminjam</label>
                                        <select class="form-control" name="peminjam" readonly>
                                            <option value=""></option>
                                            <?php foreach ($getpengaju as $key => $row) :?>
                                            <option value="<?php echo $row->id_pengajuan; ?>" <?php if($row->id_pengajuan === $id_pengajuan){echo 'selected';}?> ><?php echo $row->peminjam; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 pr-1"></div>
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Tanggal Kembali</label>
                                        <input type="date" class="form-control" name="tglkembali" value="<?php echo $tglkembali; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 pr-1"></div>  
                                <div class="col-md-3 pr-1">
                                    <div class="form-group">
                                        <label>Jam Berangkat</label>
                                        <input type="time" class="form-control" name="jamberangkat" value="<?php echo $jamberangkat; ?>">
                                    </div>
                                </div>
                                <div class="col-md-3 pr-1">
                                    <div class="form-group">
                                        <label>Jam Pulang</label>
                                        <input type="time" class="form-control" name="jampulang" value="<?php echo $jampulang; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 pr-1"></div>
                                <div class="col-md-3 pr-1">
                                    <div class="form-group">
                                        <label>Km. Awal</label>
                                        <input type="text" class="form-control" name="km_awal">
                                    </div>
                                </div>
                                <div class="col-md-3 pr-1">
                                    <div class="form-group">
                                        <label>Km. Akhir</label>
                                        <input type="text" class="form-control" name="km_akhir">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 pr-1"></div>
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Penggunaan BBM</label>
                                        <input type="text" class="form-control" name="bbm">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 pr-1"></div>
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="statusx">
                                            <option value="<?php echo $statusx?>"></option>
                                            <option value="Selesai" <?php if($statusx == 'Selesai') {echo 'selected'; } ?> >Selesai</option>
                                            <option value="Belum Selesai" <?php if($statusx == 'Belum Selesai') {echo 'selected'; } ?>>Belum Selesai</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5"></div>
                                <div class="col-md-2">
                                    <button type="submit" name="Update" class="btn btn-primary btn-group-justified">Sunting</button>
                                </div>
                                <div class="col-md-5"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>    
    </div>