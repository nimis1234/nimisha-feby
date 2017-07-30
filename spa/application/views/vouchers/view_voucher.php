<!-- DataTables -->
<link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables/dataTables.bootstrap.css">
  <section class="content">
      <div class="row">
        <div class="col-sm-12">

    <div class="box">
              <div class="box-header">
                <h3 class="box-title">View Voucher</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                 <div class="box-body table-responsive no-padding">
                   <table class="table table-hover" style="width:100%;height: 200px;">
                    <?php 

                      foreach($specific_voucher as $value) 
                       {
                     ?>
  
                        <tr>
                          <th style="height: 50px;font-size:22px;">Name</th>
                          <td style="height: 50px;font-size:22px;"><?=$value['gift_name']?></td>
                        </tr>
                        <tr>
                          <th style="height: 50px;font-size:22px;">Description</th>
                          <td style="height: 50px;font-size:22px;"><?=$value['gift_description']?></td>
                        </tr>
                        <tr>
                          <th style="height: 50px;font-size:22px;">Price</th>
                           <td style="height: 50px;font-size:22px;">
                               <?=$value['gift_price']?>
                           </td>
                        </tr>
                        <tr>
                          <th style="height: 50px;font-size:22px;">Image</th>
                          <td style="height: 50px;font-size:22px;">
                          <img  src="<?=base_url()?>assets/dist/img/vouchers/<?=$value['gift_image']?>" height='300px' width='300px'> 
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
