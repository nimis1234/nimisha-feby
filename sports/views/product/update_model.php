<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 ?>

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
                        <h2> Update Form<small></small></h2>
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
                         foreach ($update as $key => $value) {
                            
                        
                         ?>
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?=base_url()?>index.php/Model/update_action/<?=$value['model_id']?>" method="post" enctype="multipart/form-data">

                           
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Model Name <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="modelname" name="modelname" value="<?=$value['modelname']?>" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="image" class="control-label col-md-3 col-sm-3 col-xs-12">Image</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  
                                    <input id="img" class="form-control col-md-7 col-xs-12" type="file" name="image">
                                    <input type="hidden" name="old" value="<?=$value['img']?>">
                                    <img src="<?=base_url()?>Assets/images/model/<?=$value['img']?>" height="150" width="150">
                                </div>
                            </div>
                            <?php } ?>

                            <div class="form-group">
                            <label for="select" class="control-label col-md-3 col-sm-3 col-xs-12">Brand Name</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control" name="brandname">
                              <?php foreach ($brand as $key2 => $value2) { ?>
                                  
                            
                               

                                <option value="<?=$value2['brand_id']?>" <?php echo isset($value['brand_id']) && $value['brand_id']== $value2['brand_id']  ? 'selected' :'' ; ?>><?=$value2['brandname']?></option>

                                  <?php } ?>
                                
                            </select>
                            </div>
                            </div>

                           
                           
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-success">Update</button>
                                </div>
                            </div>

                        </form>
        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>