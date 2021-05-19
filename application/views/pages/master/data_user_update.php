    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="card card-chart">
                    <div class="card-header">
                        <h5 class="card-category">Data Jenis Kendaraan</h5>
                        <h4 class="card-title">Sunting Data Jenis</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('muser/update_user')?>" method="POST" class="form-valide">
                            <!-- Validation error-->
                            <?php echo validation_errors(); ?>
                            <!--ID-->
                            <input type="hidden" class="form-control" id="id_user" name="id_user" value="<?php echo $id_user; ?>">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Username</label>
                                            <input type="text" class="form-control" name="username_user" value="<?php echo $username_user; ?>" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                            <input type="text" class="form-control" name="password_user" value="<?php echo $password_user; ?>" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama</label>
                                            <input type="text" class="form-control" name="fullname_user" value="<?php echo $fullname_user?>" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                            <input type="text" class="form-control" name="email_user" value="<?php echo $email_user?>" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Telepon</label>
                                            <input type="text" class="form-control" name="phone_user" value="<?php echo $phone_user?>" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Level</label>
                                        <select class="form-control" name="level_user">
                                            <option value="<?php echo $level_user?>"></option>
                                            <option value="superadmin" <?php if($level_user == 'superadmin') {echo 'selected'; } ?> >Super Admin</option>
                                            <option value="admin" <?php if($level_user == 'admin') {echo 'selected'; } ?>>Admin</option>
                                            <option value="user" <?php if($level_user == 'user') {echo 'selected'; } ?>>User</option>
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