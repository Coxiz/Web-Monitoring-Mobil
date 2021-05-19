    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="card card-chart">
                    <div class="card-header">
                        <h5 class="card-category">Data Kendaraan</h5>
                        <h4 class="card-title">Tambah Data Kendaraan</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('mcar/insert_car')?>" method="POST" class="form-valide" autocomplete="off">
                            <!-- Validation error-->
                            <?php echo validation_errors(); ?>
                            <!--ID-->
                            <input type="hidden" id="id" name="id_mobil">
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Plat Kendaraan</label>
                                        <input type="text" class="form-control" placeholder="No. Polisi" name="plat_mobil">
                                    </div>
                                </div>
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Jenis Kendaraan</label>
                                        <select class="form-control" name="jenismobil">
                                            <option value="">Pilih jenis kendaraan</option>
                                            <?php
                                            foreach ($getjenis as $row){
                                                echo '<option value="'.$row->id_jenismobil.'">'.$row->jenismobil.'</option>';
                                            }
                                            ?>
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
                                            <?php
                                            foreach ($getjabatan as $row){
                                                echo '<option value="'.$row->id_jabatan.'">'.$row->nama_jabatan.'</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Peruntukan</label>
                                        <input type="text" class="form-control" placeholder="Mobil diperuntukan untuk" name="peruntukan_mobil">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Warna</label>
                                        <input type="text" class="form-control" placeholder="Warna kendaraan" name="warna_mobil">
                                    </div>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Km. Awal</label>
                                        <input type="text" class="form-control" placeholder="Km awal mobil" name="km_awal">
                                    </div>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Km. Akhir</label>
                                        <input type="text" class="form-control" placeholder="Km akhir mobil" name="km_akhir">
                                    </div>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-5"></div>
                                <div class="col-md-2">
                                    <button type="submit" name="Submit" class="btn btn-primary btn-group-justified">Tambah</button>
                                </div>
                                <div class="col-md-5"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>