<!-- Main content -->
<form action="<?php echo site_url('Guru/UpdateDataGuru'); ?>" method="post">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Update Guru</h3>
              
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                 <div class="box-body">
                    <input type="hidden" name="id_guru" value="<?php echo $detail['id_guru']; ?>">
                  <br>
                  <div>
                    <label>Nama Guru</label>
                    <br>
                    <input type="text" name="nama_guru" class="form-control" value="<?php echo $detail['nama_guru']; ?>">
                  </div>
                  
                </div>
                 <!-- /.box-body -->
                
                 <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->