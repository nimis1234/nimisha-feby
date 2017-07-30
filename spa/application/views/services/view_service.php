<!-- DataTables -->
<link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables/dataTables.bootstrap.css">
  <section class="content">
      <div class="row">
        <div class="col-sm-12">

    <div class="box">
              <div class="box-header">
                <h3 class="box-title">View Service</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                 <div class="box-body table-responsive no-padding">
                   <table class="table table-hover" style="width:100%;height: 200px;">
                    <?php 

                      foreach($specific_service as $value) 
                       {
                     ?>
  
                        <tr>
                          <th style="height: 50px;font-size:22px;">Service Name</th>
                          <td style="height: 50px;font-size:22px;"><?=$value['service_name']?></td>
                        </tr>
                        <tr>
                          <th style="height: 50px;font-size:22px;">Service Description</th>
                          <td style="height: 50px;font-size:22px;"><?=$value['service_description']?></td>
                        </tr>
                        <tr>
                          <th style="height: 50px;font-size:22px;">Service Image</th>
                           <td style="height: 50px;font-size:22px;">
                               <img src="<?=base_url()?>assets/dist/img/services/<?=$value['service_image']?>" height="350" width="350"> 
                           </td>
                        </tr>
                        <tr>
                          <th style="height: 50px;font-size:22px;">Service Charge</th>
                          <td style="height: 50px;font-size:22px;"><?=$value['service_price']?></td>
                        </tr>
                        <tr>
                          <th style="height: 50px;font-size:22px;">Category Name</th>
                          <td style="height: 50px;font-size:22px;"><?=$value['category_name']?></td>
                        </tr>
                        <tr>
                          <th style="height: 50px;font-size:22px;">Type</th>
                          <td style="height: 50px;font-size:22px;"><?=$value['type']?></td>
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
