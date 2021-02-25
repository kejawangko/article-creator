<style>
    /* http://caniuse.com/#search=variables */
    :root {
    --avatar-size: 2.5rem;
    /* change this value anything, e.g., 100px, 10rem, etc. */
    }

    @media (min-width: 576px) {
        .circle {
            float:right;
        }
    }

    .circle {
        background-color: #4e73df;
        border-radius: 50%;
        height: var(--avatar-size);
        text-align: center;
        width: var(--avatar-size);
        margin-right: auto;
        margin-left: auto;
    }

    .initials {
        font-size: calc(var(--avatar-size) / 2); /* 50% of parent */
        line-height: 1;
        position: relative;
        top: calc(var(--avatar-size) / 4); /* 25% of parent */
        color: white
    }
</style>
<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

    <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
            <div class="circle">
                <span class="initials">{{ Auth::user()->name[0] }}</span>
            </div>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>
    </ul>
</nav>