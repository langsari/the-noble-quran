<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn AdminLTE</title>

    <link rel="stylesheet" href="{{ URL::to('adminassets/css/bootstrap.min.css') }}">
    <!-- <link rel="stylesheet" href="css/fontawesome.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ URL::to('adminassets/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('adminassets/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('adminassets/css/skin.min.css') }}">
</head>
<body class="skin-blue">


    <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header">
      
          <!-- Logo -->
          <a href="m.quran.php" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Quran</b>.th</span>
          </a>
      
          <!-- Header Navbar -->
          <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
              <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                  <!-- Menu toggle button -->
                 
                
                  </a>
                  <ul class="dropdown-menu">
                
                    <li>
                      <!-- inner menu: contains the messages -->
                      <ul class="menu">
                        <li><!-- start message -->
                          <a href="#">
                            <div class="pull-left">
                              <!-- User Image -->
                              <img src="{{ URL::to('adminassets/img/profile.jpeg') }}" class="img-circle" alt="User Image">
                            </div>
                            <!-- Message title and timestamp -->
                            
                            <!-- The message -->
                        
                          </a>
                        </li>
                        <!-- end message -->
                      </ul>
                      <!-- /.menu -->
                    </li>
                    
                  </ul>
                </li>
                <!-- /.messages-menu -->
      
                <!-- Notifications Menu -->
                <li class="dropdown notifications-menu">
                  <!-- Menu toggle button -->
                
                   
                  </a>
                  <ul class="dropdown-menu">
                 
                    <li>
                      <!-- Inner Menu: contains the notifications -->
                      <ul class="menu">
                        <li><!-- start notification -->
                          <a href="#">
                           
                          </a>
                        </li>
                        <!-- end notification -->
                      </ul>
                    </li>
                  
                  </ul>
                </li>
                <!-- Tasks Menu -->
                <li class="dropdown tasks-menu">
                  <!-- Menu Toggle Button -->
               
                 
                  </a>
                  <ul class="dropdown-menu">
              
                    <li>
                      <!-- Inner menu: contains the tasks -->
                      <ul class="menu">
                        <li><!-- Task item -->
                          <a href="#">
                            <!-- Task title and progress text -->
                          
                            <!-- The progress bar -->
                            <div class="progress xs">
                              <!-- Change the css width attribute to simulate progress -->
                              <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                                   aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          
                              </div>
                            </div>
                          </a>
                        </li>
                        <!-- end task item -->
                      </ul>
                    </li>
                    <li class="footer">
                 
                    </li>
                  </ul>
                </li>
                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                  <!-- Menu Toggle Button -->
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <!-- The user image in the navbar-->
                    <img src="{{ URL::to('adminassets/img/profile.jpeg') }}" class="user-image" alt="User Image">
                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                    <span class="hidden-xs">Admin</span>
                  </a>
                  <ul class="dropdown-menu">
                    <!-- The user image in the menu -->
                    <li class="user-header">
                      <img src="{{ URL::to('adminassets/img/profile.jpeg') }}" class="img-circle" alt="User Image">
      
                      <p>
                       ADMIN
                        <small>Member since Nov. 2012</small>
                      </p>
                    </li>
                    <!-- Menu Body -->
                 
                      <!-- /.row -->
                    </li>
                    <!-- Menu Footer-->
                    
                  </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li>
                
                </li>
              </ul>
            </div>
          </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
      
          <!-- sidebar: style can be found in sidebar.less -->
          <section class="sidebar">
      
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
              <div class="pull-left image">
                <img src="{{ URL::to('adminassets/img/profile.jpeg') }}" class="img-circle" alt="User Image">
              </div>
              <div class="pull-left info">
                <p>Admin</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
              </div>
            </div>
      
            <!-- search form (Optional) -->
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
      
            <!-- Sidebar Menu -->
            <ul class="sidebar-menu" data-widget="tree">
              <li class="header">HEADER</li>
              <!-- Optionally, you can add icons to the links -->
              <li class="active"><a href="crud-user/index.php"><i class="fa fa-link"></i> <span>จัดการคำแปลกุรอาน</span></a></li>
              <li><a href="m.users.php"><i class="fa fa-link"></i> <span>จัดการผู้ใช้</span></a></li>
              <li><a href="index.html"><i class="fa fa-link"></i> <span>จัดการกุรอานตัฟซีร</span></a></li>
              <li><a href="index.html"><i class="fa fa-link"></i> <span>จัดการโน้ต</span></a></li>
              <!-- <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
                  <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="#">Link in level 2</a></li>
                  <li><a href="#">Link in level 2</a></li>
                </ul>
              </li>
            </ul>-->
            <!-- /.sidebar-menu -->
          </section>
          <!-- /.sidebar -->
        </aside>
      
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <h1 class="mt-5">Infomation User</h1>

                  </div>
              </div>
      
          </section>
          <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
      
        <!-- Main Footer -->
        <footer class="main-footer">
          <!-- To the right -->
          <div class="pull-right hidden-xs">
          <strong>Quran.th &copy; 2021 <a href="#"></a></strong>
          </div>
          <!-- Default to the left -->
         
        </footer>
      
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
          <!-- Create the tabs -->
          <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane active" id="control-sidebar-home-tab">
              <h3 class="control-sidebar-heading">Recent Activity</h3>
              <ul class="control-sidebar-menu">
                <li>
                  <a href="javascript:;">
                    <i class="menu-icon fa fa-birthday-cake bg-red"></i>
      
                    <div class="menu-info">
                      <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
      
                      <p>Will be 23 on April 24th</p>
                    </div>
                  </a>
                </li>
              </ul>
              <!-- /.control-sidebar-menu -->
      
              <h3 class="control-sidebar-heading">Tasks Progress</h3>
              <ul class="control-sidebar-menu">
                <li>
                  <a href="javascript:;">
                    <h4 class="control-sidebar-subheading">
                      Custom Template Design
                      <span class="pull-right-container">
                          <span class="label label-danger pull-right">70%</span>
                        </span>
                    </h4>
      
                    <div class="progress progress-xxs">
                      <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                    </div>
                  </a>
                </li>
              </ul>
              <!-- /.control-sidebar-menu -->
      
            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
              <form method="post">
                <h3 class="control-sidebar-heading">General Settings</h3>
      
                <div class="form-group">
                  <label class="control-sidebar-subheading">
                    Report panel usage
                    <input type="checkbox" class="pull-right" checked>
                  </label>
      
                  <p>
                    Some information about this general settings option
                  </p>
                </div>
                <!-- /.form-group -->
              </form>
            </div>
            <!-- /.tab-pane -->
          </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
        immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
      </div>
      <!-- ./wrapper -->
      
    

    <script src="{{ URL::to('adminassets/js/jquery.min.js') }}"></script>
    <script src="{{ URL::to('adminassets/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::to('adminassets/js/adminlte.min.js') }}"></script>
    <script>
        $('#myBox').boxWidget({
            animationSpeed: 500,
            collapseTrigger: '#boxBtn',
            removeTrigger: '#my-remove-button-trigger',
            collapseIcon: 'fa-minus',
            expandIcon: 'fa-plus',
            removeIcon: 'fa-times'
        })
    </script>
</body>
</html>