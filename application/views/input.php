<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $title ?></title>
  	<?php $this->load->view('include/head'); ?>
  	<?php $this->load->view('include/link_input_atas'); ?>
</head>

<body class="animated-content">
    <?php $this->load->view('include/sidebar_atas'); ?>
        <div id="wrapper">
            <div id="layout-static">
			<?php $this->load->view('include/sidebar_kiri'); ?>
                <div class="static-content-wrapper">
                    <div class="static-content">
                        <div class="page-content">
                            <ol class="breadcrumb">
                            </ol>
                            <div class="container-fluid">
              								<div class="panel panel-default" data-widget='{"draggable": "false"}'>
              									<div class="panel-heading">
              										<h2><?php echo $title ?></h2>
              									</div>
              									<div class="panel-editbox" data-widget-controls=""></div>
              									<div class="panel-body">
              										<!-- form input -->
                                  <form method="post" action="<?php echo base_url()?>client/create" enctype="multipart/form-data" class="form-horizontal row-border">
                                    <!-- <div class="form-group">
                                      <label class="col-sm-2 control-label">ID Client</label>
                                      <div class="col-sm-2">
                                        <input type="text" name="idptg" value="" class="form-control" readonly>
                                      </div>
                                    </div> -->
                                    <div class="form-group">
                                      <label class="col-sm-2 control-label">Nama Client*</label>
                                      <div class="col-sm-8">
                                        <input type="text" name="nmptg" value="" class="form-control" maxlength="60" required autofocus>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-sm-2 control-label">Username*</label>
                                      <div class="col-sm-8">
                                        <input type="text" name="usrptg" value="" class="form-control" maxlength="60" required autofocus>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-sm-2 control-label">Password*</label>
                                      <div class="col-sm-8">
                                        <input type="text" name="passptg" value="" class="form-control" required autofocus>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-sm-2 control-label">Link Project*</label>
                                      <div class="col-sm-8">
                                        <input type="text" name="linkptg" value="http://" class="form-control" required autofocus>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-sm-2 control-label alert-danger">*) Wajib di isi.</label>
                                    </div>
                                    <div class="panel-footer">
                                      <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2">
                                          <button type="submit" class="btn-primary btn">Simpan</button>
                                          <button type="reset" class="btn-danger btn">Batal</button>
                                        </div>
                                      </div>
                                    </div>
                                  </form>
                                  <!-- /form input -->
                                </div>
                              </div>
                            </div> <!-- .container-fluid -->
                        </div> <!-- #page-content -->
                    </div>
                  <?php $this->load->view('include/footer'); ?>
                </div>
            </div>
        </div>

  <?php $this->load->view('include/switcher'); ?>
  <?php $this->load->view('include/link_input_bawah'); ?>
</body>
</html>
