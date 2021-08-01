 <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      
    </div><br>
    
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>


<li class="treeview">
  <a href="{{ url('/students') }}">
    <i class="fa fa-laptop"></i>
    <i class="fa fa-angle-left pull-right"></i>
    <span>Students</span>
    <span class="pull-right-container">
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="{{ url('/students') }}">View Details</a></li>
  </ul>
</li>

<li class="treeview">
  <a href="{{ url('/students') }}">
    <i class="fa fa-laptop"></i>
    <i class="fa fa-angle-left pull-right"></i>
    <span>Marks</span>
    <span class="pull-right-container">
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="{{ url('/student/marks') }}">View Details</a></li>
  </ul>
</li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>