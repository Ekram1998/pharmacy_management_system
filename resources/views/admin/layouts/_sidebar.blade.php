<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        {{-- Dashboard --}}
        <li class="nav-item">
            <a class="nav-link @if (Request::segment(2) == 'dashboard') @else collapsed @endif"
                href="{{ url('admin/dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        {{-- Customer --}}
        <li class="nav-item">
            <a class="nav-link @if (Request::segment(2) == 'customers') @else collapsed @endif"
                href="{{ url('admin/customers') }}">
                <i class="bi bi-person"></i>
                <span>Customers</span>
            </a>
        </li><!-- End Dashboard Nav -->

        {{-- Medicines --}}
        <li class="nav-item">
            <a class="nav-link @if (Request::segment(2) == 'medicines') @else collapsed @endif"
                href="{{ url('admin/medicines') }}">
                <i class="bi bi-shop"></i>
                <span>Medicines</span>
            </a>
        </li>

        {{-- Medicines_Stock --}}
        <li class="nav-item">
            <a class="nav-link @if (Request::segment(2) == 'medicines_stock') @else collapsed @endif"
                href="{{ url('admin/medicines_stock') }}">
                <i class="bi bi-archive"></i>
                <span>Medicines Stock</span>
            </a>
        </li>

        {{-- Suppliers --}}
        <li class="nav-item">
            <a class="nav-link @if (Request::segment(2) == 'suppliers') @else collapsed @endif"
                href="{{ url('admin/suppliers') }}">
                <i class="bi bi-person"></i>
                <span>Suppliers</span>
            </a>
        </li>

        {{-- Invoices --}}
        <li class="nav-item">
            <a class="nav-link @if (Request::segment(2) == 'invoices') @else collapsed @endif"
                href="{{ url('admin/invoices') }}">
                <i class="bi bi-journal-text"></i>
                <span>Invoices</span>
            </a>
        </li>

        {{-- Invoices --}}
        <li class="nav-item">
            <a class="nav-link @if (Request::segment(2) == 'purchases') @else collapsed @endif"
                href="{{ url('admin/purchases') }}">
                <i class="bi bi-currency-dollar"></i>
                <span>Purchese</span>
            </a>
        </li>

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li>

        {{-- Logout --}}
        <li class="nav-item dropdown">
            <a hidden id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">

        <li class="nav-item">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Logout</span>
        </li>
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        </div>
        </li>




    </ul>

</aside>
