<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <!-- Optionally, you can add icons to the links -->
      <li><a href="<?php echo site_url();?>/SMS/home/account"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-globe"></i> <span>Learning Resource</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="<?php echo site_url();?>/LRMDS/home"><i class="fa fa-circle-o"></i> Dashboard</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Search</a></li>
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
          <li><a href="#"><i class="fa fa-circle-o"></i> Search</a></li>
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
              <li><a href="#"><i class="fa fa-circle-o"></i> Search</a></li>
              <li><a href="<?php echo site_url();?>/INVENTORY/home/stocks"><i class="fa fa-circle-o"></i> Stocks</a></li>
              <li><a href="<?php echo site_url();?>/INVENTORY/home/products"><i class="fa fa-circle-o"></i> Product List</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Expenses</a></li>
            </ul>
          </li>
          <li>
            <a href=""><i class="fa fa-circle-o"></i> Generate Report(s)
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo site_url();?>/INVENTORY/home/reports_search"><i class="fa fa-circle-o"></i> Search</a></li>
              <li><a href="<?php echo site_url();?>/INVENTORY/home/generate_apr"><i class="fa fa-circle-o"></i> Generate APR</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Generate PBB</a></li>
            </ul>
          </li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Dental Inventory</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Medical Inventory</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Settings</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-globe"></i> <span>Website</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> Dashboard</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Search</a></li>
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
                </ul>
              </li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Widgets</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Forms</a></li>
            </ul>
          </li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Preview</a></li>
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
              <li><a href="<?php echo site_url('MEDICAL/home/student');?>"><i class="fa fa-circle-o"></i> Students</a></li>
              <li><a href="<?php echo site_url('MEDICAL/home/employees');?>"><i class="fa fa-circle-o"></i> Teacher/Staff</a></li>
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
