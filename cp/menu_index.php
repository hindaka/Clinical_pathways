      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?php echo $r1["nama"]; ?></p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
			<li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Input CP</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="cp.php"><i class="fa fa-circle-o"></i> Input CP Partus Spontan</a></li>
                <li><a href="sc_cp.php"><i class="fa fa-circle-o"></i> Input CP Sectio Cesarea</a></li>
              </ul>
            </li>
			<li><a href="rekapcp.php"><i class="fa fa-edit"></i> Rekap Clinical Pathways</a></li>
			<li><a href="../logout.php"><i class="fa fa-lock"></i> Logout</a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
