<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/select2/select2.min.css">

     <section class="content">
      <div class="row">
        <div class="col-xs-12">

      <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add New Services</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="<?= base_url()?>index.php/Services/add_service_action" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                  <label for="inputName3" class="col-sm-2 control-label">Service Name</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="inputName3" placeholder="Service Name" name="name" required>
                  </div>
                </div>

                <div class="form-group">
                   <label class="col-sm-2 control-label">
                      Service Description
                   </label>

                  <div class="col-sm-6">
                    <textarea class="form-control" placeholder="Service Description" name="description" rows="12" required>
                    </textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputfile3" class="col-sm-2 control-label">Service Image</label>

                  <div class="col-sm-6">
                    <input type="file"  name="image" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputName3" class="col-sm-2 control-label">Service Charge</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="Service Charge" name="price" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputName3" class="col-sm-2 control-label">Type</label>

                  <div class="col-sm-6">
                    <input type="radio" value="shop" name="type">Shop Service
                    <input type="radio" value="home" name="type">Home Service
                    <input type="radio" value="both" name="type">Both Service
                  </div>
                </div>

                <div class="form-group">
                   <label class="col-sm-2 control-label">
                     Category Name
                   </label>

                  <div class="col-sm-6">
                    <select class="form-control select2" style="width: 100%;" name="categories" id="inputUserTypes3" required>
                        <?php
                         foreach ($categories as $value) {
                         ?> 
                            <option value="<?=$value['category_id']?>">
                               <?=$value['category_name'] ?>
                            </option>
                        <?php
                          }
                        ?>
                     </select> 
                  </div> 
                </div>

            </div>
              <!-- /.box-body -->
            <div class="box-footer">
                <span style="padding-left:500px;">
                  <button type="submit" class="btn btn-info " name="addservices">Add</button>
                </span>
            </div>
              <!-- /.box-footer -->
            </form>
          </div>
         </div>
        </div>
       </section>

<!-- jQuery 2.2.3 -->
<script src="<?=base_url()?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Select2 -->
<script src="<?=base_url()?>assets/plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="<?=base_url()?>assets/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?=base_url()?>assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?=base_url()?>assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?=base_url()?>assets/plugins/iCheck/icheck.min.js"></script>
<!-- bootstrap color picker -->
<script src="<?=base_url()?>assets/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>

<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?=base_url()?>assets/plugins/morris/morris.min.js"></script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    });
  
</script>
     
