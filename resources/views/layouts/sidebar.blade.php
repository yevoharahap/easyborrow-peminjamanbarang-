<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu</li>
        <li class="sidebar-item">
            <a href="{{ route('home') }}" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('user.index') }}" class='sidebar-link'>
                <i class="bi bi-person"></i>
                <span>Data User</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('barang.index') }}" class='sidebar-link'>
                <i class="bi bi-box"></i>
                <span>Data Barang</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('peminjaman.index') }}" class='sidebar-link'>
                <i class="bi bi-archive"></i>
                <span>Peminjaman</span>
            </a>
        </li>
    </ul>
    <div class="sidebar-menu d-flex flex-column align-items-center">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class='sidebar-link btn btn-danger text-white font-weight-bold'>
                <i class="bi bi-box-arrow-right"></i>
                <span class="font-weight-bold">Logout</span>
            </button>
        </form>
        </a>
    </div>
</div>
