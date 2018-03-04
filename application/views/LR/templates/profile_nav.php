<!--sidebar start-->
     <aside>
         <div id="sidebar"  class="nav-collapse ">
             <!-- sidebar menu start-->
             <ul class="sidebar-menu" id="nav-accordion">

                 <p class="centered"><img src="<?php echo base_url();?>includes/lr/img/profile-pics/aljohn.jpg" class="img-circle" width="80" height="80"></p>
                 <h5 class="centered"><?php echo $user['email']?>
                  </small></h5>
                 <div class="centered"><span class="label label-danger">Admin</span></div><br />
                 <li class="sub-menu">
                     <a href="<?php echo site_url();?>/lr/profile/activity_log">
                         <i class="fa fa-desktop"></i>
                         <span>Activity Log</span>
                     </a>
                 </li>
                 <li class="sub-menu">
                     <a href="<?php echo site_url();?>/lr/profile/upload">
                         <i class="fa fa-upload"></i>
                         <span>Upload Learning Resource</span>
                     </a>
                 </li>
                 <li class="sub-menu">
                     <a href="javascript:;" >
                         <i class="fa fa-cogs"></i>
                         <span>Account Settings</span>
                     </a>
                     <ul class="sub">
                       <li><a  href="<?php echo site_url();?>/lr/profile/edit_profile""gallery.html">Edit Profile</a></li>
                       <li><a  href="<?php echo site_url();?>/lr/profile/change_pass">Change Password</a></li>
                      <li><a  href="<?php echo site_url();?>/lr/profile/log_history">Log History</a></li>
                     </ul>
                 </li>
             </ul>
             <!-- sidebar menu end-->
         </div>
     </aside>
