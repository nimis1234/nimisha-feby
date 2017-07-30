<!-- DataTables -->
<link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables/dataTables.bootstrap.css">
  <section class="content">
      <div class="row">
        <div class="col-sm-12">

    <div class="box">
              <div class="box-header">
                <h3 class="box-title">Gift Voucher Order List</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <br/>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Gift Name</th>
                      <th>Sender Name</th>
                      <th>Receiver Name</th>
                       <th>Gift Image</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                     $i=1;
                     foreach($order_list as $value) 
                      {
                   ?>
                        <tr>
                          <td><?=$i?></td>
                          <td><?=$value['gift_name']?></td>
                          <td><?=$value['sender_name']?></td>
                          <td><?=$value['receiver_name']?></td>
                          <td> 
                             <img  src="<?=base_url()?>assets/dist/img/vouchers/<?=$value['gift_image']?>" height='150px' width='150px'> 
                          </td>
                          <td>
                             <a href="<?=base_url()?>index.php/Giftvoucher/view_order/<?=$value['order_id'] ?>" class="btn btn-primary">&nbspView &nbsp</a>
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
                      <th>Name</th>
                      <th>Image</th>
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