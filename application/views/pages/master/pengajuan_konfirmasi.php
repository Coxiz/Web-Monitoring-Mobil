    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="card card-chart">
                    <div class="card-header">
                        <h4 class="card-title">Konfirmasi Peminjaman</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('mpengajuan/konfirmasi')?>" method="POST" class="form-valide">
                            <!-- Validation error-->
                            <?php echo validation_errors(); ?>
                            <!--ID-->
                            <input type="hidden" class="form-control" id="id_pengajuan" name="id_pengajuan" value="<?php echo $id_pengajuan; ?>">
                            
                            <div class="row">
                                <div class="col-md-3 pr-1"></div>
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Nama Peminjam</label>
                                        <input type="text" class="form-control" name="peminjam" value="<?php echo $peminjam; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 pr-1"></div>
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Bidang</label>
                                        <input type="text" class="form-control" name="bidang" value="<?php echo $bidang; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 pr-1"></div>
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Jumlah Penumpang</label>
                                        <input type="text" class="form-control" name="jumlahpenumpang" value="<?php echo $jumlahpenumpang; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 pr-1"></div>
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Tujuan</label>
                                        <input type="text" class="form-control" name="tujuan" value="<?php echo $tujuan; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 pr-1"></div>
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Keperluan</label>
                                        <input type="text" class="form-control" name="keperluan" value="<?php echo $keperluan; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 pr-1"></div>  
                                <div class="col-md-3 pr-1">
                                    <div class="form-group">
                                        <label>Tanggal Pinjam</label>
                                        <input type="date" class="form-control" name="tglpinjam" value="<?php echo $tglpinjam; ?>">
                                    </div>
                                </div>
                                <div class="col-md-3 pr-1">
                                    <div class="form-group">
                                        <label>Tanggal Kembali</label>
                                        <input type="date" class="form-control" name="tglkembali">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 pr-1"></div>
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Driver</label>
                                        <select class="form-control" name="fullname_driver">
                                            <option value="">Pilih driver</option>
                                            <?php
                                            foreach ($getdriver as $row){
                                                echo '<option value="'.$row->id_driver.'">'.$row->fullname_driver.'</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 pr-1"></div>
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Plat-Mobil</label>
                                        <select class="form-control" name="plat_mobil">
                                            <option value="">Pilih kendaraan (plat)</option>
                                            <?php
                                            foreach ($getmobil as $row){
                                                echo '<option value="'.$row['id_mobil'].'">'.$row['plat_mobil'].' - '.$row['jenismobil'].'</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 pr-1"></div>  
                                <div class="col-md-3 pr-1">
                                    <div class="form-group">
                                        <label>Jam Berangkat</label>
                                        <input type="time" class="form-control" name="jamberangkat">
                                    </div>
                                </div>
                                <div class="col-md-3 pr-1">
                                    <div class="form-group">
                                        <label>Jam Pulang</label>
                                        <input type="time" class="form-control" name="jampulang">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-5"></div>
                                <div class="col-md-2">
                                    <button type="submit" name="submit" class="btn btn-primary btn-group-justified">Setujui</button>
                                </div>
                                <div class="col-md-5"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>    
    </div>