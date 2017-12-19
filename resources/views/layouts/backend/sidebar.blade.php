 <!-- Left side column. contains the logo and sidebar -->
          <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
              <!-- Sidebar user panel -->
              <div class="user-panel">
                <div class="pull-left image">
                  <img src="{{ url('/') }}/backend/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                  <p>Laurens Post</p>
                  <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
              </div>

              <!-- sidebar menu: : style can be found in sidebar.less -->
              <ul class="sidebar-menu">
                <li>
                  <a href="{{ url('/dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                  </a>
                </li>
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-pencil"></i>
                    <span>Artikelen</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="{{ route('overview.index') }}"><i class="fa fa-circle-o"></i> Alle artikelen</a></li>
                    <li><a href="{{ route('overview.create') }}"><i class="fa fa-circle-o"></i> Nieuw artikel</a></li>
                  </ul>
                </li>
                <li><a href="{{ route('categories.index') }}"><i class="fa fa-folder"></i> <span>Categorieen</span></a></li>
              </ul>
            </section>
            <!-- /.sidebar -->
          </aside>