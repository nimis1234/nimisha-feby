<!-- DataTables -->
<link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables/dataTables.bootstrap.css">
  <section class="content">
      <div class="row">
        <div class="col-sm-12">

    <div class="box">
              <div class="box-header">
                <h3 class="box-title">View Contact</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                 <div class="box-body table-responsive no-padding">
                   <table class="table table-hover" style="width:100%;height: 200px;">
                    <?php 

                      foreach($specific_contact as $value) 
                       {
                     ?>
  
                        <tr>
                          <th style="height: 50px;font-size:22px;">Name</th>
                          <td style="height: 50px;font-size:22px;"><?=$value['contact_name']?></td>
                        </tr>
                        <tr>
                          <th style="height: 50px;font-size:22px;">Contact No</th>
                          <td style="height: 50px;font-size:22px;"><?=$value['contact_no']?></td>
                        </tr>
                        <tr>
                          <th style="height: 50px;font-size:22px;">Email</th>
                           <td style="height: 50px;font-size:22px;">
                               <?=$value['email']?>
                           </td>
                        </tr>
                        <tr>
                          <th style="height: 50px;font-size:22px;">Message</th>
                          <td style="height: 50px;font-size:22px;"><?=$value['message']?></td>
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
