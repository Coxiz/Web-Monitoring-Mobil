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
                        <form action="<?php echo base_url('mpengajuan/insert_pengajuan')?>" method="POST" class="form-valide" autocomplete="off">
                            <!-- Validation error-->
                            <?php echo validation_errors(); ?>
                            <!--ID-->
                            <input type="hidden" id="id" name="id_pengajuan">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Pengaju</label>                          
                                        <input type="text" class="form-control" name="fullname_user" value="<?php echo $this->session->userdata['fullname']?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Nama Peminjam</label>
                                        <input type="text" class="form-control" name="peminjam">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Bidang</label>
                                        <input type="text" class="form-control" name="bidang">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Jumlah Penumpang</label>
                                        <input type="number" class="form-control" name="jumlahpenumpang">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tujuan</label>
                                        <input type="text" class="form-control" name="tujuan">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Keperluan</label>
                                        <input type="text" class="form-control" name="keperluan">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tanggal Pinjam</label>
                                        <input type="date" class="form-control" name="tglpinjam">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Lama Pinjam</label>
                                        <input type="text" class="form-control" name="lamapinjam">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-4">
                                    <button type="submit" name="Submit" class="btn btn-primary btn-group-justified">Ajukan</button>
                                </div>
                                <div class="col-md-3">
                                    <button type="reset" class="btn btn-primary btn-group-justified">Batal</button>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>  
    </div>