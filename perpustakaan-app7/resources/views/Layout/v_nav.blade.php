<ul class="sidebar-menu" data-widget="tree">
    <li class="header">Dashboard</li>
    <li class="{{ request()->is('/')? 'active' : '' }}">
        <a href="/">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="header">Menu</li>
    @if(auth()->user()->id_role == 1)
    <li class="treeview">
        <a href="#">
            <i class="fa fa-bars"></i> <span>Menu</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="{{ request()->is('kategori')? 'active' : '' }}">
                <a href="/kategori">
                    <i class="fa fa-circle-o"></i>
                    Kategori
                </a>
            </li>
            <li class="{{ request()->is('buku')? 'active' : '' }}">
                <a href="/buku"><i class="fa fa-book"></i> Buku</a>
            </li>
            <li class="{{ request()->is('anggota')? 'active' : '' }}">
                <a href="/anggota">
                    <i class="fa fa-users"></i>
                    Anggota
                    {{-- <span> Anggota </span> --}}
                </a>
            </li>
        </ul>
    </li>
    @elseif(auth()->user()->id_role == 2)
    {{-- <li class="{{ request()->is('kategori')? 'active' : '' }}">
        <a href="/kategori">
            <i class="fa fa-circle-o"></i>
            Kategori
        </a>
    </li> --}}
    <li class="{{ request()->is('anggota')? 'active' : '' }}">
        <a href="/anggota">
            <i class="fa fa-users"></i>
            Anggota
            {{-- <span> Anggota </span> --}}
        </a>
    </li>
    <li class="{{ request()->is('buku')? 'active' : '' }}">
        <a href="/buku"><i class="fa fa-book"></i> Buku</a>
    </li>
    @else

    @endif


    <li class="header">Transaksi</li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-bars"></i> <span>Sirkulasi</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="{{ request()->is('transaksi')? 'active' : '' }}">
                <a href="/transaksi">
                    <i class="fa fa-user"></i>
                    Transaksi
                </a>
            </li>
            <li>
                <a href="/role">
                    <i class="fa fa-circle-o"></i>
                    <span> Role </span>
                </a>
            </li>
        </ul>
    </li>
</ul>
