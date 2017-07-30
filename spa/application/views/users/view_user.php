   <!-- Main content -->
<section class="content">
<br/>
<br/>
  <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">User Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover" style="width:100%;height: 200px;">

              <?php
               foreach ($user_data as $value) {
              ?>
                <tr>
                  <th style="height: 50px;font-size:22px;">Name</th>
                  <td style="height: 50px;font-size:22px;"><?=$value['name']?></td>
                </tr>
                <tr>
                     <th style="height: 50px;font-size:22px;">User Image</th>
                     <td style="height: 50px;font-size:22px;">
                       <img src="<?=base_url()?>assets/dist/img/users/<?=$value['image']?>">
                    </td>
                </tr>
                <tr>
                  <th style="height: 50px;font-size:22px;">Email</th>
                  <td style="height: 50px;font-size:22px;"><?=$value['email']?></td>
                </tr>
                <tr>
                  <th style="height: 50px;font-size:22px;">User Type</th>
                  <td style="height: 50px;font-size:22px;"><?=$value['user_type_name']?></td>
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
    </div>
</section>
    <!-- /.content -->

<!-- jQuery 2.2.3 -->
<script src="<?=base_url()?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>