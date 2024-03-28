<!-- Brand Logo -->
<a href="{{ route('dashboard') }}" class="brand-link">
    <img src="/dist/img/logo-color.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">SIM Restaurant</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            @if (Auth::user()->role == 'admin')
            <li class="nav-item {{ request()->routeIs('dashboard') ? 'menu-open active' : '' }}">
                <a href="{{ route('dashboard') }}"
                    class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li> 
            
            <li class="nav-item {{ url()->current() == route('produk') || url()->current() == route('formproduk') ? 'menu-open active' : '' }}">
                <a href="{{ route('produk') }}" class="nav-link {{ url()->current() == route('produk') || url()->current() == route('formproduk') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-cube"></i>
                    <p>
                        Produk
                    </p>
                </a>
            </li>
            <li class="nav-item {{ url()->current() == route('pembelian') || url()->current() == route('formpembelian') ? 'menu-open active' : '' }}">
                <a href="{{route('pembelian')}}" class="nav-link {{ url()->current() == route('pembelian') || url()->current() == route('formpembelian') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        pembelian
                    </p>
                </a>
            </li>
            <li class="nav-item {{ url()->current() == route('user') || url()->current() == route('formuser') ? 'menu-open active' : '' }}">
                <a href="{{ route('user') }}" class="nav-link {{ url()->current() == route('user') || url()->current() == route('formuser') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-chair"></i>
                    <p>
                        user
                    </p>
                </a>
            </li>
            @else
            <li class="nav-item {{ request()->routeIs('dashboard') ? 'menu-open active' : '' }}">
                <a href="{{ route('dashboard') }}"
                    class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li> 
            
            <li class="nav-item {{ url()->current() == route('produk') || url()->current() == route('formproduk') ? 'menu-open active' : '' }}">
                <a href="{{ route('produk') }}" class="nav-link {{ url()->current() == route('produk') || url()->current() == route('formproduk') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-cube"></i>
                    <p>
                        Produk
                    </p>
                </a>
            </li>
            <li class="nav-item {{ url()->current() == route('pembelian') || url()->current() == route('formpembelian') ? 'menu-open active' : '' }}">
                <a href="{{route('pembelian')}}" class="nav-link {{ url()->current() == route('pembelian') || url()->current() == route('formpembelian') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        pembelian
                    </p>
                </a>
            </li>
            @endif
            {{-- <li class="nav-item {{ url()->current() == route('meja') || url()->current() == route('formmeja') ? 'menu-open active' : '' }}">
                <a href="{{ route('meja') }}" class="nav-link {{ url()->current() == route('meja') || url()->current() == route('formmeja') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-list"></i>
                    <p>
                        Detail Penjualan
                    </p>
                </a>
            </li> --}}
        </ul>
    </nav>
</div>
<!-- /.sidebar -->
