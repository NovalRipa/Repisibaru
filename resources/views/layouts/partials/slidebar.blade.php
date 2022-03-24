<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="{{ asset('bakend/img/user.png') }}" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name">{{ Auth::user()->name }}</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <form role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </form>
    <ul class="nav menu">
        <li><a href="/admin"><em class='fa fa-dashboard' style='color: #ffdd00'>&nbsp;</em><b> Dashboard</b></a></li>
        <li><a href="{{route('barang.index')}}"><em class="fa fa-archive" style='color: #ffdd00'>&nbsp;</em><b> Barang </b></a></li>
        {{-- <li><a href="{{url('admin/cetak-laporan')}}"><em class="fa fa-calendar" style='color: #ffdd00'>&nbsp;</em><b> Laporan </b></a></li> --}}
    </ul>
</div>
<!--/.sidebar-->
