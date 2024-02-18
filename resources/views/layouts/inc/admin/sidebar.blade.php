<aside id="left-panel" class="left-panel">
  <nav class="navbar navbar-expand-sm navbar-default">
    <div id="main-menu" class="main-menu collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active">
          <a href="index.html"><i class="menu-icon fa fa-th"></i>Dashboard </a>
        </li>
        <li class="menu-title">Master Data</li><!-- /.menu-title -->
        <li class="menu-item-has-children dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>User</a>
          <ul class=" sub-menu children dropdown-menu">
            <li><i class=""></i><a href="ui-buttons.html">Customer</a></li>
            <li><i class=""></i><a href="ui-badges.html">Penjual</a></li>
          </ul>
        </li>
        <li class="menu-item-has-children dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Kelola Produk</a>
          <ul class=" sub-menu children dropdown-menu">
            <li><i class=""></i><a href="{{ url('admin/products') }}">Produk</a></li>
            <li><i class=""></i><a href="{{ url('admin/category') }}">Kategori</a></li>
          </ul>
        </li>
        <li class="active">
            <a href="{{ url('admin/brands') }}"><i class="menu-icon fa fa-align-justify"></i>Brand</a>
          </li>
        <li class="menu-item-has-children dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Kelola Pesanan</a>
          <ul class="sub-menu children dropdown-menu">
            <li><i class=""></i><a href="tables-basic.html">Pesanan</a></li>
            <li><i class=""></i><a href="tables-data.html">Transaksi</a></li>
          </ul>
        </li>
        <li class="menu-item-has-children dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>laporan</a>
          <ul class="sub-menu children dropdown-menu">
            <li><i class=""></i><a href="forms-basic.html">Laporan Penjualan</a></li>
            <li><i class=""></i><a href="forms-advanced.html">Laporan Produk</a></li>
            <li><i class=""></i><a href="forms-advanced.html">Laporan Keuangan</a></li>
          </ul>
        </li>
        <li class="menu-title">Extras</li><!-- /.menu-title -->
        <li class="">
          <a href="#" class="" data-toggle="" aria-haspopup="" aria-expanded=""> <i class="menu-icon fa fa-gears"></i>Pengaturan</a>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </nav>
</aside>
