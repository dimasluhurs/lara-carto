<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
<li><a href="{{ backpack_url('elfinder') }}"><i class="fa fa-files-o"></i> <span>{{ trans('backpack::crud.file_manager') }}</span></a></li>

<!-- <li class="treeview">
    <a href="#"><i class="fa fa-newspaper-o"></i> <span>News</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li><a href="{{ backpack_url('article') }}"><i class="fa fa-newspaper-o"></i> <span>Articles</span></a></li>
      <li><a href="{{ backpack_url('category') }}"><i class="fa fa-list"></i> <span>Categories</span></a></li>
      <li><a href="{{ backpack_url('tag') }}"><i class="fa fa-tag"></i> <span>Tags</span></a></li>
    </ul>
</li> -->

<!-- <li><a href="{{ backpack_url('menu-item') }}"><i class="fa fa-list"></i> <span>Menu</span></a></li> -->
<li><a href='{{ backpack_url('kecamatan') }}'><i class='fa fa-map'></i> <span>Kecamatan</span></a></li>
<li><a href='{{ backpack_url('kelurahan') }}'><i class='fa fa-map-o'></i> <span>Kelurahan</span></a></li>
<li><a href='{{ backpack_url('villages') }}'><i class='fa fa-map-pin'></i> <span>Kota</span></a></li>
<li><a href='{{ backpack_url('takes') }}'><i class='fa fa-globe'></i> <span>Data Lengkap </span></a></li>