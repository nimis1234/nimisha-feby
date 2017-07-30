<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

 <!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Product Management</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2> Edit Form<small></small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                       <?php //print_r($res);exit;
                         foreach ($res as $key => $value) {
                            
                        
                         ?>
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?=base_url()?>index.php/Tips/edit_action/<?=$value['tip_id']?>" method="post" enctype="multipart/form-data">

                           
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tip Name <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="tipname" name="tipname" value="<?=$value['tipname']?>" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                           


                             <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="example-textarea-input">Description <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea id="example-textarea-input" rows="5" name="description" required="required" class="form-control col-md-7 col-xs-12"><?=$value['tip_description']?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="image" class="control-label col-md-3 col-sm-3 col-xs-12">Image</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="img" class="form-control col-md-7 col-xs-12" type="file" name="image[]" multiple>
                                </div>
                            </div>
                             

                                <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-success">Update</button>
                                </div>
                            </div>


                        </form>
                       

                       <div class="row">
                        <?php foreach ($images as $key2 => $value2): ?>
                          <div class="col-xs-6 col-md-4">
                          <a href="Assets/images/tips/" class="thumbnail">
                           <img src="<?=base_url()?>Assets/images/tips/<?=$value2['image']?>" heigth="200" width="200">
                            <a class="btn btn-danger btn-xs" href="<?=base_url()?>index.php/Tips/delete_image/<?=$value2['img_id']?>/<?=$value['tip_id']?>">Delete</a>
                          </a>
                         </div>
                        <?php endforeach ?>
                         
                       </div>
                           
                         <?php } ?>  

                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>