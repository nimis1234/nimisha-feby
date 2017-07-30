<section class="content">
  <div class="row">
  <div class="col-sm-12">

    <div class="box">
              <div class="box-header">
                <h3 class="box-title">Video Gallery</h3>
                <br/>
                <br/>
                 <a href="<?=base_url()?>index.php/Gallery/add_video" class="btn btn-info pull-right">Add Video</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                 <div class="box-body table-responsive no-padding">
                   <table class="table table-hover" style="width:100%;height: 200px;">
                     <tr>
                       <th>No</th>
                       <th>Videos</th>
                       <th>Actions</th>
                     </tr>
                         <?php 
                              $i=1;
                             foreach ($videos as $value) {
                           ?>
                     <tr>
                       <td><?=$i?></td>
                       <td>
                            <?=$value['video_name']?>
                       </td>
                       <td>
                          <a href="<?=base_url()?>index.php/Gallery/view_video/<?= $value['video_id'] ?>" class="btn btn-primary"> &nbspView &nbsp</a>

                          <a href="<?=base_url()?>index.php/Gallery/delete_video/<?= $value['video_id'] ?>" class="btn btn-danger">Delete</a>
                       </td>
                     </tr>
                
                  
                  <?php
                    $i=$i+1;
                    }
                  ?>
                  </table>
                 </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

<script src="<?=base_url()?>assets/plugins/jQuery/jquery-2.2.3.min.js">
</script>
