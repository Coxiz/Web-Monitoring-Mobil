    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="card card-chart">
                    <div class="card-header">
                        <h5 class="card-category">Data Jenis Kendaraan</h5>
                        <h4 class="card-title">Tambah Data Jenis</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('mjenis/insert_jenis')?>" method="POST" class="form-valide" autocomplete="off">
                            <!-- Validation error-->
                            <?php echo validation_errors(); ?>
                            <!--ID-->
                            <input type="hidden" id="id" name="id_jenismobil">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Kode Jenis</label>
                                        <input type="text" class="form-control" placeholder="Kode Jenis Kendaraan" name="kode_jenismobil">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Jenis Kendaraan</label>
                                        <input type="text" class="form-control" placeholder="" name="jenismobil">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Jumlah</label>
                                        <input type="number" class="form-control" placeholder="" name="jumlah_jenismobil">
                                    </div>
                                </div>
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