    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="card card-chart">
                    <div class="card-header">
                        <h5 class="card-category">Data Kendaraan</h5>
                        <h4 class="card-title">Sunting Data Kendaraan</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('mcar/update_car')?>" method="POST" class="form-valide">
                            <!-- Validation error-->
                            <?php echo validation_errors(); ?>
                            <!--ID-->
                            <input type="hidden" class="form-control" id="id_mobil" name="id_mobil" value="<?php echo $id_mobil; ?>">
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Plat Kendaraan</label>
                                        <input type="text" class="form-control" name="plat_mobil" value="<?php echo $plat_mobil; ?>" >
                                    </div>
                                </div>
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Jenis Kendaraan</label>
                                        <select class="form-control" name="jenismobil">
                                            <option value="">Pilih jenis kendaraan</option>
                                            <?php foreach ($getjenis as $key => $row) :?>
                                            <option value="<?php echo $row->id_jenismobil; ?>" <?php if($row->id_jenismobil === $id_jenismobil){echo 'selected';}?> ><?php echo $row->jenismobil; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Jabatan</label>
                                        <select class="form-control" name="nama_jabatan">
                                            <option value="">Pilih jabatan</option>
                                            <?php foreach ($getjabatan as $key => $row) :?>
                                            <option value="<?php echo $row->id_jabatan; ?>" <?php if($row->id_jabatan === $id_jabatan){echo 'selected';}?> ><?php echo $row->nama_jabatan; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Peruntukan</label>
                                        <input type="text" class="form-control" name="peruntukan_mobil" value="<?php echo $peruntukan_mobil; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Warna</label>
                                        <input type="text" class="form-control" name="warna_mobil" value="<?php echo $warna_mobil; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Km. Awal</label>
                                        <input type="text" class="form-control" name="km_awal" value="<?php echo $km_awal; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Km. Akhir</label>
                                        <input type="text" class="form-control" name="km_akhir" value="<?php echo $km_akhir; ?>">
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