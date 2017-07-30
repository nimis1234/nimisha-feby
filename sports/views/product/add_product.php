<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript"> 
   $(document).ready(function(){
       $('#brand').change(function(){
           $("#model option").remove();
           var url_new="index.php/product/get_models";
           var brand = document.getElementById('brand').value;
           //alert(brand);
           var base_url="<?php echo base_url(); ?>" ;
           
           $.ajax({
               type:"POST",
               url:base_url+url_new,
               dataType: 'json',
               data: {brand: brand},
               success:function (res) {
                   $.each(res['models_list'],function(element,val) {
                       $('#model').append($('<option>', { 
                           value: val.model_id,
                           text : val.modelname 
                       }));
                   }); 
                   
               },
           });
       });
   });

</script>
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
                        <h2>Product Form<small></small></h2>
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
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?=base_url()?>index.php/Product/add_product_action" method="post" enctype="multipart/form-data">

                           
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Product Name <span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="productname" name="productname" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="image" class="control-label col-md-3 col-sm-3 col-xs-12">Image</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="img" class="form-control col-md-7 col-xs-12" type="file" name="image">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="select" class="control-label col-md-3 col-sm-3 col-xs-12">Brand Name</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="brandname" id="brand">
                                    <option></option>
                                    <?php foreach ($brand as $key => $value) { ?>
                                        <option value="<?=$value['brand_id']?>"><?=$value['brandname']?></option>

                                    <?php } ?>
                                    </select>
                                </div>
                            </div>

                             <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="example-textarea-input">Description <span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea id="example-textarea-input" rows="5" name="description" required="required" class="form-control col-md-7 col-xs-12"></textarea>
                                </div>
                            </div>



                            <div class="form-group">
                                <label for="select" class="control-label col-md-3 col-sm-3 col-xs-12">Model Name</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" id="model" name="modelname">
                                        <option></option>
                                
                                    </select>
                                </div>
                            </div>
       
                             <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price">Price<span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="price" name="price" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            

                          
                           
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

