    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="card card-chart">
                    <div class="card-header">
                        <h5 class="card-category">Data Driver</h5>
                        <h4 class="card-title">Sunting Data Driver</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('mdriver/update_driver')?>" method="POST" class="form-valide">
                            <!-- Validation error-->
                            <?php echo validation_errors(); ?>
                            <!--ID-->
                            <input type="hidden" class="form-control" id="id_driver" name="id_driver" value="<?php echo $id_driver; ?>">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>NIP</label>
                                        <input type="text" class="form-control" name="nip_driver" value="<?php echo $nip_driver; ?>" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" name="fullname_driver" value="<?php echo $fullname_driver; ?>" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Telepon</label>
                                        <input type="text" class="form-control" name="phone_driver" value="<?php echo $phone_driver?>" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status_driver">
                                            <option value="<?php echo $status_driver?>"></option>
                                            <option value="Ada" <?php if($status_driver == 'Ada') {echo 'selected'; } ?> >Ada</option>
                                            <option value="Tidak Ada" <?php if($status_driver == 'Tidak Ada') {echo 'selected'; } ?>>Tidak Ada</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5"></div>
                                <div class="col-md-2">
                                    <button type="submit" name="Update" class="btn btn-primary btn-group-justified">Sunting</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>