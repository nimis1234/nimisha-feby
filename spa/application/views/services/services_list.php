<!-- DataTables -->
<link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables/dataTables.bootstrap.css">
  <section class="content">
      <div class="row">
        <div class="col-sm-12">

    <div class="box">
              <div class="box-header">
                <h3 class="box-title">Services List</h3>
                <a href="<?=base_url()?>index.php/Services/add_service" class="btn btn-info pull-right">Add</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <br/>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Service Name</th>
                      <th>Service Image</th>
                      <th>Category Name</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                     $i=1;
                     foreach($list as $value) 
                      {
                   ?>
                        <tr>
                          <td><?=$i?></td>
                          <td><?=$value['service_name']?></td>
                          <td>
                             <img src="<?=base_url()?>assets/dist/img/services/<?=$value['service_image']?>" height="150" width="150"> 
                          </td>
                          <td><?=$value['category_name']?></td>
                          <td>
                             <a href="<?=base_url()?>index.php/Services/view_service/<?= $value['service_id'] ?>" class="btn btn-primary"> &nbspView &nbsp</a>
                             <a href="<?=base_url()?>index.php/Services/edit_service/<?= $value['service_id'] ?>" class="btn btn-success"> &nbspEdit &nbsp &nbsp</a>
                             <a href="<?=base_url()?>index.php/Services/delete_service/<?= $value['service_id'] ?>" class="btn btn-danger">Delete</a>
                          </td>
                        </tr>
                  <?php
                     $i=$i+1;
                      }
                   
                  ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Service Name</th>
                      <th>Service Image</th>
                      <th>Category Name</th>
                      <th>Actions</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
<script src="<?=base_url()?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="<?=base_url()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>