
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> Sports Fest <small>Gallery</small> </h3>
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

              <div id="add">
                <a href="<?=base_url()?>index.php/Fest/add_fest" class="btn btn-md btn-info btn-center pull-right"> ADD</a>
              </div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Main <small>Events</small></h2>
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

                    
                   
                    <!--  <p>Media gallery design emelents</p> -->
                     <div class="row">
                  <?php foreach ($result as $key => $value) { ?>
                    
                      <div class="col-lg-3 col-md-4 col-xs-6">
                      
                        <div class="thumbnail">

                          <div class=" view-first">
                         
                            <img style="width: 100%; " src="<?=base_url()?>Assets/images/festgallery/<?=$value['image']?>" height="180" alt="image" />

                          </div>
                         
                          </div>
                           <div class=" ">
                            <a class="btn btn-danger btn-xs pull-right" href="<?=base_url()?>index.php/Fest/delete_image/<?=$value['fest_id']?>">Delete</a>
                           </div> 
                           
                          </div>
                      
                      
                      <?php } ?>
                      </div>

                          <!--  <div class="mask">
                              <p>Your Text</p>
                             <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>-->

                     
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->







