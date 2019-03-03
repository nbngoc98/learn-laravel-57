<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="{{asset('admin')}}" class="logo">
      <span class="logo-lg"><b>APPLE STORE</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              Admin
              <?php
                // var_dump($_SESSION['address']);
                // exit();
              ?>
              <img src="{{asset('public/backend/image/admin.jpg')}}" class="user-image" alt="User Image">
              <span class="hidden-xs"></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{asset('public/backend/image/admin.jpg')}}" class="img-circle" alt="User Image">

                <p>
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="admin.php?controller=login&action=logout" class="btn btn-default btn-flat">Sign out</a>
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
          <img src="{{asset('public/backend/image/admin.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
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
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">QUẢN LÝ SHOP</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-gears"></i>
            <span>Settings</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
             <li ><a href="admin.php?controller=sliders&action=list"><i class="fa fa-circle-o"></i> Sliders</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-sticky-note"></i>
            <span>Quản Lý Tin Tức</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin.php?controller=loai&action=loaiNews"><i class="fa fa-circle-o"></i> Danh Mục Tin Tức</a></li>
            <li><a href="admin.php?controller=news&action=listNews"><i class="fa fa-circle-o"></i> Danh Sách Tin Tức</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Quản Lý Sản Phẩm</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{asset('admin/category')}}"><i class="fa fa-circle-o"></i> Danh Mục Sản Phẩm</a></li>
            <li><a href="{{asset('admin/product')}}"><i class="fa fa-circle-o"></i> Danh Sách Sản Phẩm</a></li>
          </ul>
        </li>
        <li>
          <a href="admin.php?controller=comment&action=listCom">
            <i class="fa fa-fw fa-comment"></i> <span>Comment</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">12 Comment</small>
            </span>
          </a>
        </li>
        <li><a href="admin.php?controller=carts&action=list"><i class="fa fa-fw fa-shopping-cart"></i> Đơn đặt hàng</a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-user"></i>
            <span>Quản Lý User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin.php?controller=users&action=list"><i class="fa fa-circle-o"></i> Danh sách User</a></li>
          </ul>
        </li>
        <li><a href="admin.php?controller=contact&action=list"><i class="fa fa-fw fa-share"></i> <span>Quản Lý Phản Hồi</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
