    <div class="panel-header panel-header-lg">
        <!--div id="container"></div-->
        <div class="container-fluid">
            <div class="wrapper">            
                <div class="row">
                    <div class="col-lg-4">
                        <a href="<?php echo base_url('mhome/home'); ?>">
                            <div class="card" style="background-color: #f96332; color:white;">
                                <div class="card-header" style="padding-top: 0px;">
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <h4 style="margin-top: 20px;">On Progress</h4>
                                            <h4 style="margin-top: 20px;">Driver dan Mobil</h4>
                                        </div>
                                        <div class="col-sm-3">
                                            <h4 style="margin-top: 20px;"><br></h4>
                                            <h4 style="margin-top: 20px;"><?php echo $totalstatus;?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="<?php echo base_url('mdriver/?p=avx'); ?>">
                            <div class="card" style="background-color: #f96332; color:white;">
                                <div class="card-header" style="padding-top: 0px;">
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <h4 style="margin-top: 20px;">(Pool)</h4>
                                            <h4 style="margin-top: 20px;">Driver</h4>
                                        </div>
                                        <div class="col-sm-3">
                                            <h4 style="margin-top: 20px;"><br></h4>
                                            <h4 style="margin-top: 20px;"><?php echo $totaldriver ;?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="<?php echo base_url('mcar/?p=avx'); ?>">
                            <div class="card" style="background-color: #f96332; color:white;">
                                <div class="card-header" style="padding-top: 0px;">
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <h4 style="margin-top: 20px;">(Pool)</h4>
                                            <h4 style="margin-top: 20px;">Mobil</h4>
                                        </div>
                                        <div class="col-sm-3">
                                            <h4 style="margin-top: 20px;"><br></h4>
                                            <h4 style="margin-top: 20px;"><?php echo $totalmobil;?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <?php if($this->session->userdata('logged_in')==TRUE) : ?>
                        <?php if($this->session->userdata('level')!='user') : ?>
                        <a href="<?php echo base_url('mpengajuan/?p=avx'); ?>">
                            <div class="card" style="background-color: #f96332; color:white;">
                                <div class="card-header" style="padding-top: 0px;">
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <h4 style="margin-top: 20px;">(Belum Disetujui)</h4>
                                            <h4 style="margin-top: 20px;">Pengajuan</h4>
                                        </div>
                                        <div class="col-sm-3">
                                            <h4 style="margin-top: 20px;"><br></h4>
                                            <h4 style="margin-top: 20px;"><?php echo $totalpengajuan;?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php endif ?>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>