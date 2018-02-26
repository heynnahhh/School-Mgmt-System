
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-maroon                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-maroon sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="<?php echo site_url();?>/SMS/Home/Account" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">GHT&trade;</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>GHawTech</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="<?php echo base_url();?>includes/dist/img/login/user1.png" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Hi, <?php echo $user['first_name']?>!</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?php echo base_url();?>includes/dist/img/login/user1.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo $user['full_name']?>
                  <small><?php echo $user['email']?></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo site_url();?>/SMS/home/logout" class="btn btn-default btn-flat">Sign out</a>
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

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="<?php echo site_url();?>/SMS/Home/account"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-globe"></i> <span>Learning Resource</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url();?>/LRMDS/home"><i class="fa fa-circle-o"></i> Dashboard</a></li>
            
            <li>
              <a href=""><i class="fa fa-circle-o"></i> LRMDS
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Assessment and Evaluation</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Storage and Maintenance</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Publication and Delivery</a></li>
              </ul>
            </li>
            <li>
              <a href=""><i class="fa fa-circle-o"></i> Manage Portal Content
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Home</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Resources</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Media Gallery</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Preview</a></li>
              </ul>
            </li>
            <li>
              <a href=""><i class="fa fa-circle-o"></i> Settings
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> User Management</a></li>
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
              <a href="<?php echo site_url();?>/INVENTORY/home/manage_records"><i class="fa fa-circle-o"></i> Manage Record(s)
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
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-globe"></i> <span>Website</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Dashboard</a></li>
            
            <li>
              <a href=""><i class="fa fa-circle-o"></i> Manage Content
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href=""><i class="fa fa-circle-o"></i> Pages
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?php echo site_url();?>/website/Upload"><i class="fa fa-circle-o"></i> Home News</a></li>
                    <li><a href="<?php echo site_url();?>/website/pages/pages_home"><i class="fa fa-circle-o"></i> Home Banner</a></li>
                    <li><a href="<?php echo site_url();?>/website/Calendar_Cont"><i class="fa fa-circle-o"></i> Academic Calendar</a></li>
                  </ul>
                </li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Widgets</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Forms</a></li>
              </ul>
            </li>
            <li><a href="<?php echo site_url();?>/website/Home"><i class="fa fa-circle-o"></i> Preview</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Settings</a></li>
          </ul>
        </li>
         <li class="treeview">
        <a href="#">
          <i class="fa fa-plus-square"></i> <span>Medical</span>
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
              <li><a href="<?php echo site_url('MEDICAL/home/Student');?>"><i class="fa fa-circle-o"></i> Students</a></li>
              <li><a href="<?php echo site_url('MEDICAL/home/Employees');?>"><i class="fa fa-circle-o"></i> Teacher/Staff</a></li>
            </ul>
          </li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-plus-square"></i> <span>Dental</span>
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
              <li><a href="<?php echo site_url('MEDICAL/home/student');?>"><i class="fa fa-circle-o"></i> Students</a></li>
              <li><a href="<?php echo site_url('MEDICAL/home/employees');?>"><i class="fa fa-circle-o"></i> Teacher/Staff</a></li>
            </ul>
          </li>
        </ul>
      </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
