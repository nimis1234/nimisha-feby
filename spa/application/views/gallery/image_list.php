<section class="content">
  <div class="row">
  <div class="col-sm-12">

    <div class="box">
              <div class="box-header">
                <h3 class="box-title">Image Gallery</h3>
                <br/>
                <br/>
                <form method="post" action="<?= base_url()?>index.php/Gallery/upload_image_action" enctype="multipart/form-data">
                 <p> <b>Upload Files here</b></p>
                 <input type="file" name="userFiles[]" multiple>
                 <br/>
                 <button type="submit" class="btn btn-info" name="upload">Upload</button>
                 
                 </form>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                 <div class="box-body table-responsive no-padding">
                   <table class="table table-hover" style="width:100%;height: 200px;">
                     <tr>
                       <th>No</th>
                       <th>Images</th>
                       <th>Actions</th>
                     </tr>
                         <?php 
                              $i=1;
                             foreach ($images as $value) {
                           ?>
                     <tr>
                       <td><?=$i?></td>
                       <td>
                            <img src="<?=base_url()?>assets/dist/img/image_gallery/<?=$value['image_name']?>" height="150" width="150">
                       </td>
                       <td>
                          <a href="<?=base_url()?>index.php/Gallery/view_image/<?= $value['image_id'] ?>" class="btn btn-primary"> &nbspView &nbsp</a>

                          <a href="<?=base_url()?>index.php/Gallery/delete_image/<?= $value['image_id'] ?>" class="btn btn-danger">Delete</a>
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
<script src="<?=base_url()?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
