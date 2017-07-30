<header class="main-header">
    <!-- Logo -->
    <a href="<?=base_url()?>index.php/Home" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Spa</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Spa</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=base_url()?>assets/dist/img/users/<?=$this->session->image?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?=$this->session->name?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=base_url()?>assets/dist/img/users/<?=$this->session->image?>" class="img-circle" alt="User Image">

                <p>
                  <?=$this->session->name?>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?=base_url()?>index.php/User/user_profile/<?=$this->session->user_id?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?=base_url()?>index.php/Login/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>


   <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
         <a href="<?=base_url()?>index.php/User/user_profile/<?=$this->session->user_id?>">
          <img src="<?=base_url()?>assets/dist/img/users/<?=$this->session->image?>" height="45" width="45" class="img-circle" alt="User Image">
           </a>
        </div>
        <div class="pull-left info">
          <p> 
           <span>
             <a href="<?=base_url()?>index.php/User/user_profile/<?=$this->session->user_id?>">
                  <?=$this->session->name?>
              </a>
             </span> 
          </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
         
         <li><a href="<?=base_url()?>index.php/User/users_information">  <i class="fa fa-user" aria-hidden="true"></i><span>User Managemnet</span> </a> </li>

          <li><a href="<?=base_url()?>index.php/Giftvoucher/voucher_order_list">  <i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Order List</span> </a> </li>

          <li><a href="<?=base_url()?>index.php/Booking/booking_list">  <i class="fa fa-book" aria-hidden="true"></i><span>Booking</span> </a> </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Service Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url()?>index.php/Category/all_categories">Category Management</a></li>
            <li><a href="<?=base_url()?>index.php/Services/all_services">Services</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-picture-o"></i> <span>Gallery</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
             <a href="<?=base_url()?>index.php/Gallery/image_list">  <i class="fa fa-file-image-o"></i>  <span>Image Gallery </span>
             </a>
            </li>

            <li>
             <a href="<?=base_url()?>index.php/Gallery/videos_list"> <i class="fa fa-video-camera"></i> <span>Videos</span>  
             </a>
            </li>
          </ul>
        </li>

        <li><a href="<?=base_url()?>index.php/Contacts/contacts_list">  <i class="fa fa-phone" aria-hidden="true"></i><span>Contacts</span> </a> </li>

        <li><a href="<?=base_url()?>index.php/Giftvoucher/voucher_list">  <i class="fa fa-gift" aria-hidden="true"></i><span>Gift Vouchers</span> </a> </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
    </section>