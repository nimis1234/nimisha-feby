<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Sports App!<small>View</small></h3>
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
              <div class="clearfix"></div>
              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tips View <small></small></h2>
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

                   <!-- <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>-->

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                          <!--  <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>-->
                            
                            <th class="column-title">Tip Name </th>
                            <!-- <th class="column-title">Image </th> -->
                            <th class="column-title">Description</th>
                            <th class="column-title">Time Stamp</th>
                          <!--  <th class="column-title">Status </th>
                            <th class="column-title">Amount </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>-->
                            </th>
                           <!-- <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>-->
                          </tr>
                        </thead>
                        <?php 
                            
                        foreach ($view as $key => $value) {
                          
                        
                        ?>
                        <tbody>
                          <tr class="even pointer">
                          <!--  <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>-->
                            
                            <td class=" " style="size:50px;"><?=$value['tipname']?></td>
                           <!-- <td class=" "> <i class="success fa fa-long-arrow-up"></i></td>-->
                            <!-- <td class=" "><img src="<?=base_url()?>Assets/images/tips/<?=$value['image']?>" heigth="200" width="200"></td> -->
                            <td class=" "><?=$value['tip_description']?></td>
                            <td class=" "><?=$value['timestamp']?></td>
                           <!-- <td class="a-right a-right "></td>
                            <td class=" last"><a href="#"></a>
                            </td>-->
                          </tr>
                         </tbody>
                         <?php
                           
                           }
                          ?>
                       </table>

                       <div class="row">
                        <?php foreach ($images as $key2 => $value2): ?>
                          <div class="col-xs-6 col-md-4">
                          <a href="#" class="thumbnail  view-first">
                           <img src="<?=base_url()?>Assets/images/tips/<?=$value2['image']?>" height="300" width="400">
                          </a>
                         </div>
                        <?php endforeach ?>
                         
                       </div>
                    </div>
							
						
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
