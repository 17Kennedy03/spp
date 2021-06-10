<section class="content-header">
          <h1>
            
          </h1>
</section>

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Informasi SPP     <small>Data Guru</small></h3>

             
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
    
    
              <table class="table table-striped" id="data_grid">
                <thead>
                <tr>
                  <th>Nama Guru</th>
                  <th>Photo</th>
                </tr>
                </thead><tbody>
                <?php
  if(!empty($DataGuru))
  {
    foreach($DataGuru as $ReadDS)
    {
  ?>

  <tr>
    <td><?php echo $ReadDS->nama_guru; ?></td>
    <td><img src="<?php echo base_url('images/').$ReadDS->image; ?>" width="60"></td>
  </tr>
            
         <?php
     }
 }
 ?></tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>




