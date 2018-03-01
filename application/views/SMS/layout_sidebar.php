<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <!-- Optionally, you can add icons to the links -->
      <li class="active"><a href="<?php echo site_url();?>/SMS/Home/account"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-book"></i> <span>Learning Resource</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> Search</a></li>
          <li><a href="<?php echo site_url();?>/LRMDS/home/topics"><i class="fa fa-circle-o"></i> Topics</a></li>
          <li>
            <a href=""><i class="fa fa-circle-o"></i> Subjects
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo site_url();?>/LRMDS/home/jhs"><i class="fa fa-circle-o"></i> Junior High School</a></li>
              <li><a href="<?php echo site_url();?>/LRMDS/home/shs"><i class="fa fa-circle-o"></i> Senior High School</a></li>
            </ul>
          </li>
          <li><a href="<?php echo site_url();?>/LRMDS/home/strands"><i class="fa fa-circle-o"></i> Strands</a></li>
          <li>
            <a href=""><i class="fa fa-circle-o"></i> Configuration
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> User Accounts</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> User Privilege</a></li>
            </ul>
          </li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-database"></i> <span>Inventory</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo site_url();?>/INVENTORY/home"><i class="fa fa-circle-o"></i> Dashboard</a></li>

          <li><a href="<?php echo site_url();?>/INVENTORY/home/compose_email"><i class="fa fa-circle-o"></i> Compose E-mail</a></li>
          <li><a href="<?php echo site_url();?>/INVENTORY/home/transactions"><i class="fa fa-circle-o"></i> Transactions</a></li>
          <li><a href="<?php echo site_url();?>/INVENTORY/home/inventory_items"><i class="fa fa-circle-o"></i> Inventory Items</a></li>
          <li><a href="<?php echo site_url();?>/INVENTORY/home/stock_register"><i class="fa fa-circle-o"></i> Stock Register</a></li>
          <li>
            <a href="<?php echo site_url();?>/INVENTORY/home/manage_records"><i class="fa fa-circle-o"></i> Generate Report(s)
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">

              <li><a href="<?php echo site_url();?>/INVENTORY/home/stocks"><i class="fa fa-circle-o"></i> Stocks</a></li>
              <li><a href="<?php echo site_url();?>/INVENTORY/home/products"><i class="fa fa-circle-o"></i> Product List</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Expenses</a></li>
            </ul>
          </li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Settings</a></li>
        </ul>
      </li>


      <li class="treeview">
        <a href="#">
          <i class="fa fa-medkit"></i> <span>Medical</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo site_url('MEDICAL/home');?>"><i class="fa fa-circle-o"></i> Dashboard</a></li>
          <li>
            <a href=""><i class="fa fa-circle-o"></i> Patients Record
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo site_url('MEDICAL/home/student');?>"><i class="fa fa-circle-o"></i> Students</a></li>
              <li><a href="<?php echo site_url('MEDICAL/home/employees');?>"><i class="fa fa-circle-o"></i> Teacher/Staff</a></li>
            </ul>
          </li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-user-md"></i> <span>Dental</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo site_url('DENTAL/home');?>"><i class="fa fa-circle-o"></i> Dashboard</a></li>
          <li>
            <a href=""><i class="fa fa-circle-o"></i> Patients Record
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo site_url('DENTAL/home/student');?>"><i class="fa fa-circle-o"></i> Students</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Teachers/Staff</a></li>
            </ul>
          </li>
        </ul>
      </li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
