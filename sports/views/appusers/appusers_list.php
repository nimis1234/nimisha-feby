 <!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Sports App!<small>Users</small></h3>
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
                        <h2>Users List <small>Users</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a></li>
                                    <li><a href="#">Settings 2</a></li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!--<p class="text-muted font-13 m-b-30">
                        DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
                        </p>-->

                       <!--   <div id="add">
                            <a href="<?=base_url()?>index.php/App_user/add_app_users" class="btn btn-md btn-info btn-center pull-right">
                            ADD</a>
                        </div>-->
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>profile_pic</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php $i=1;
                                foreach ($result as $key => $value) {
                            ?>
                            <tbody>
                                <tr>
                                    <td><?=$i;?></td>
                                    <td><?=$value['name']?></td>
                                    <td> <img src="<?=base_url()?>Assets/images/appuser/<?=$value['profile_pic']?>" heigth="200" width="200"></td>
                                    <td><?=$value['email_id']?></td>
                                    <td>
                                    <a class="btn btn-info" href="<?=base_url()?>index.php/App_user/user_view/<?=$value['users_id']?>">&nbspView&nbsp</a>
                                    <a class="btn btn-success" href="<?=base_url()?>index.php/App_user/user_update/<?=$value['users_id']?>">Update</a>
                                    <a class="btn btn-danger" href="<?=base_url()?>index.php/App_user/user_delete/<?=$value['users_id']?>">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                            <?php $i++;} ?>
                        </table>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>