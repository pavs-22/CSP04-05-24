<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{URL::to('/')}}/images/profile.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>CSP User<?php // echo $user['username']; ?></p>
          <a><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">REPORTS</li>
        <li class=""><a href="{{ route('scholar.index')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class="header">MANAGE</li>
        
        <li><a href="{{ route('scholar.list')}}"><i class="fa fa-users"></i> <span>List of Scholars</span></a></li>
        
          
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
              <span>Scholar Type</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('scholar.college')}}"><i class="fa fa-circle-o"></i>College</a></li>
            <li><a href="{{ route('scholar.highschool')}}"><i class="fa fa-circle-o"></i>High School</a></li>
            <li><a href="{{ route('scholar.seniorhigh')}}"><i class="fa fa-circle-o"></i>Senior High</a></li>
            
           
          </ul>
        </li>

       
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Total Graduates</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i>per Institution</a></li>
            <!-- li><a href="hiring/region.php"><i class="fa fa-circle-o"></i>per Region</a></li -->
            <li><a href="#"><i class="fa fa-circle-o"></i>per Area</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>per Unit</a></li>
           
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-users"></i> <span>Available for Hiring</span></a></li>
        <li class="header">Reports</li>
        <li><a href="#"><i class="fa fa-files-o"></i> <span>Disbursement of Allowance</span></a></li>
        <li><a href="#"><i class="fa fa-clock-o"></i> <span>Summary Report</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>