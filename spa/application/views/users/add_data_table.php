<!-- DataTables -->
<link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables/dataTables.bootstrap.css">
  <section class="content">
      <div class="row">
        <div class="col-xs-12">

    <div class="box">
              <div class="box-header">
                <h3 class="box-title">Users List</h3>
                <a href="<?=base_url()?>index.php/User/add_users" class="btn btn-info pull-right">Add</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <br/>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>User Type</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                     $i=1;
                     foreach($users as $value) 
                      {
                   ?>
                        <tr>
                          <td><?=$i?></td>
                          <td><?=$value['name']?></td>
                          <td><?=$value['email']?></td>
                          <td><?=$value['user_type_name']?></td>
                          <td>
                             <a href="<?=base_url()?>index.php/User/view_user/<?= $value['user_id'] ?>" class="btn btn-info">View</a>
                             <a href="<?=base_url()?>index.php/User/edit_user/<?= $value['user_id'] ?>" class="btn btn-success">Edit</a>
                             <a href="<?=base_url()?>index.php/User/remove_user/<?= $value['user_id'] ?>" class="btn btn-danger">Delete</a>
                             
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
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Role</th>
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