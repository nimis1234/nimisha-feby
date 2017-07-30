<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Form Elements</h3>
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
                        <h2>Form Design <small>different form elements</small></h2>
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
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?=base_url()?>index.php/App_user/add_user_action" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Profile_pic <span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="file" id="name" required="required" name="profile_pic" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name <span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="name" required="required" name="name" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="email" class="form-control col-md-7 col-xs-12" type="text" name="email_id">
                                </div>
                            </div>

                            
                            <div class="form-group">
                                <label for="password" class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="password" class="form-control col-md-7 col-xs-12" type="password" name="password">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="mob" class="control-label col-md-3 col-sm-3 col-xs-12">Contact_no</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="mob" class="form-control col-md-7 col-xs-12" type="text" name="mobile_no">
                                </div>
                            </div>

                              <div class="form-group">
                                <label for="ad" class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea id="ad" class="form-control col-md-7 col-xs-12"  rows="5" name="address"></textarea>
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