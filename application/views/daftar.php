<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $title ?></title>
  	<?php $this->load->view('include/head'); ?>
  	<?php $this->load->view('include/link_daftar_atas'); ?>
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
              										<!-- tabel daftar -->
                                <table id="gantibahasa" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>Nama Petugas</th>
                                      <th>Username</th>
                                      <th>Password</th>
                                      <th>Link Project</th>
                                      <th>Pilihan</th>
                                    </tr>
                                  </thead>
                                  <tbody>

                                    <!-- load data client dari db -->
                                    <?php
                                    $no = 1;
                                    foreach ($clients as $client) { ?>
                                     
                                    
                                      <tr class="odd gradeX">
                                        <td><?php echo $no++ ?>.</td>
                                        <td><?php echo $client['namaclient'] ?></td>
                                        <td><?php echo $client['username'] ?></td>
                                        <td><?php echo $client['password'] ?></td>
<<<<<<< HEAD
                                        <td><a href="<?php echo $client['linkproject'] ?>">Klik</a></td>
=======
                                        <td><?php echo $client['linkproject'] ?></td>
>>>>>>> f03c602c4a38a93cb0d076e285d5337b859b552e
                                        <td>
                                        <div class="btn-group">

                                            <?php echo anchor('client/view/'.$client['idclient'],'<button type="button" class="btn btn-success-alt"><i class="ti ti-zoom-in"></i></button>')?>
                                            <?php echo anchor('client/edit/'.$client['idclient'],'<button type="button" class="btn btn-primary-alt"><i class="ti ti-pencil-alt"></i></button>')?>
                                            <?php echo anchor('client/hapus/'.$client['idclient'],'<button type="button" class="btn btn-danger-alt"><i class="ti ti-trash"></i></button>',array('onclick' => "return confirm('Apakah Anda yakin akan menghapus data ini?')"))?>
                                        </div>
                                        </td>
                                      </tr>
                                    <?php } ?>  
                                  </tbody>
                                </table>

                                  <!-- tabel daftar -->
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
  <?php $this->load->view('include/link_daftar_bawah'); ?>
</body>
</html>
