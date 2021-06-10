<section class="content-header">
          <h1>
           
          </h1>
</section>

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"> Informasi SPP     <small>Data Guru</small></h3>

             
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
    
    
      <a href="<?php echo site_url('Guru/VFormAddGuru'); ?>" class="btn btn-primary btn-sm fa fa-plus"> Tambah Data</a><br><br>
      
  
              <table class="table table-striped" id="data_grid">
                <thead>
                <tr>
                  <th>Nama Guru</th>
                  <th>Photo</th>
                  <th>Aksi</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
  if(!empty($DataGuru))
  {
    foreach($DataGuru as $ReadDS)
    {
  ?>

  <tr>
    <td><?php echo $ReadDS->nama_guru; ?></td>
    <td><img src="<?php echo base_url('images/').$ReadDS->image; ?>" width="60"></td>
    

    <td width="5%">
      <a href="<?php echo site_url('Guru/DataGuru/'.$ReadDS->id_guru.'/view') ?>">Update</a>
      <td>
      <a href="<?php echo site_url('Guru/DeleteDataGuru/'.$ReadDS->id_guru) ?>">Delete</a>
    </td>
  </tr>
            
         <?php
     }
 }
 ?>
 </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>




