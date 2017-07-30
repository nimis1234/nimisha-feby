

  <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> About Us <small></small> </h3>
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
              <?php if (count($result)<0) {?>
                <a href="<?=base_url()?>index.php/About/add_about" id="addbtn" class="btn btn-md btn-info btn-center pull-right"> ADD</a>
              <?php } ?>
                
              </div>


            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Something<small>About</small></h2>
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
                    <?php foreach ($result as $key => $value) { ?>
                    
            <div class="row">
               <div class="col-md-12">
                  <h2 style="text-align:center;font-color:#42f4d4;"><strong></strong></h2>
                        <p><?=$value['aboutus']?></p>
                  </div>
            </div>


            
                      <?php } ?>
                      
            <a class="btn btn-success btn-lg pull-right" href="<?=base_url()?>index.php/About/edit/<?=$value['about_id']?>">Edit</a>

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
