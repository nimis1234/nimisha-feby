 <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?=$nobookings?></h3>

              <p>New Bookings</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="<?=base_url()?>index.php/Booking/booking_list" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?=$nocategories?></h3>

              <p>Categories</p>
            </div>
            <div class="icon">
              <i class="fa fa-tags"></i>
            </div>
            <a href="<?=base_url()?>index.php/Category/all_categories" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?=$noadminusers?></h3>

              <p>Admin Users</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?=base_url()?>index.php/User/users_information" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?=$noservices?></h3>

              <p>Services</p>
            </div>
            <div class="icon">
              <i class="fa fa-briefcase"></i>
            </div>
            <a href="<?=base_url()?>index.php/Services/all_services" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">

          <!-- TO DO List -->
          <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">Latest Contacts</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="todo-list">
              <?php

               foreach($contact_list as $value)
                 {
              ?>

                <li>
                  <!-- drag handle -->
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <!-- General tools such as edit or delete-->
                  <div class="tools">
                    <a class="fa fa-eye" href="<?=base_url()?>index.php/Contacts/view_contact/<?=$value['contact_id']?>"></a>
                  </div>
                  <!-- todo text -->
                  &nbsp<span class="fa fa-user" style="color:#1ad1ff;"></span><span class="text"><?=$value['contact_name']?>&nbsp:-</span>
                  <p class="text" style="text-align:justify;"><?=$value['message']?></p>
                  
                  <!-- Emphasis label -->

                  
                </li> 
                <?php
                  }
                ?>
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix no-border">
              <a href="<?=base_url()?>index.php/Contacts/contacts_list" class="btn btn-default pull-right"><i class="fa fa-eye text-info"></i>&nbspView More</a>
            </div>
          </div>
          <!-- /.box -->

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
<script src="<?=base_url()?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>