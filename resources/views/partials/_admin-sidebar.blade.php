<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <!-- Optionally, you can add icons to the links -->
      <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li class="treeview">
        <a href="#"><i class="fa fa-file"></i> <span>Berita</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('/admin/news') }}">List Berita</a></li>
          <li><a href="{{ url('/admin/news/create') }}">Tulis Berita</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#"><i class="fa fa-photo"></i> <span>Galeri</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('/admin/gallery') }}">List Photo</a></li>
          <li><a href="{{ url('/admin/gallery/create?type=image') }}">Tambah Photo</a></li>
          <li><a href="{{ url('/admin/gallery/create?type=video') }}">Tambah Video</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#"><i class="fa fa-user"></i> <span>Administrator</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('/admin/users') }}">Lihat Admin</a></li>
          <li><a href="{{ url('/admin/users/create') }}">Tambah Admin</a></li>
        </ul>
      </li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>