<!-- DataTables -->
<link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables/dataTables.bootstrap.css">
  <section class="content">
      <div class="row">
        <div class="col-sm-12">

    <div class="box">
              <div class="box-header">
                <h3 class="box-title">View Booking</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                 <div class="box-body table-responsive no-padding">
                   <table class="table table-hover" style="width:100%;height: 200px;">
                    <?php 

                      foreach($specific_booking as $value) 
                       {
                     ?>
  
                        <tr>
                          <th style="height: 50px;font-size:22px;">Name</th>
                          <td style="height: 50px;font-size:22px;"><?=$value['name']?></td>
                        </tr>
                        <tr>
                          <th style="height: 50px;font-size:22px;">Address</th>
                          <td style="height: 50px;font-size:22px;"><?=$value['address']?></td>
                        </tr>
                        <tr>
                          <th style="height: 50px;font-size:22px;">Booking_time</th>
                           <td style="height: 50px;font-size:22px;">
                               <?=$value['booking_time']?>
                           </td>
                        </tr>
                    <?php

                        }
                     ?>
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
