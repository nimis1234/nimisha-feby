<!-- DataTables -->
<link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables/dataTables.bootstrap.css">
  <section class="content">
      <div class="row">
        <div class="col-sm-12">

    <div class="box">
              <div class="box-header">
                <h3 class="box-title">View Video</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                 <div class="box-body table-responsive no-padding">
                   <table class="table table-hover" style="width:100%;height: 200px;">
                    <?php 

                      foreach($specific_video as $value) 
                       {
                     ?>
  
                        <tr>
                          <td>
                          <iframe width="560" height="315" src="<?=$value['video_address']?>" frameborder="0" allowfullscreen> </iframe> 
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
