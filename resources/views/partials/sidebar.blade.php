    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('dashboard') ? 'fw-bold text-success' : 'text-success' }}"
                    href="/dashboard">
                    <i class="bi bi-speedometer2 me-2"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('growth-records') ? 'fw-bold text-success' : 'text-success' }}"
                    href="/growth-records">
                    <i class="bi bi-graph-up me-2"></i>
                    Growth Records
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('health-records') ? 'fw-bold text-success' : 'text-success' }}"
                    href="/health-records">
                    <i class="bi bi-journal-medical me-2"></i>
                    Health Records
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('vaccination') ? 'fw-bold text-success' : 'text-success' }}"
                    href="/vaccination">
                    <i class="bi bi-capsule me-2"></i>
                    Vaccination
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('feeding-records') ? 'fw-bold text-success' : 'text-success' }}"
                    href="/feeding-records">
                    <i class="bi bi-egg me-2"></i>
                    Feeding Records
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('breeding') ? 'fw-bold text-success' : 'text-success' }}"
                    href="/breeding">
                    <i class="bi bi-people me-2"></i>
                    Breeding
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('off-springs') ? 'fw-bold text-success' : 'text-success' }}"
                    href="/off-springs">
                    <i class="bi bi-person-fill me-2"></i>
                    Off Springs
                </a>
            </li>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-success">
                <span>Farm Management</span>
            </h6>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('sales') ? 'fw-bold text-success' : 'text-success' }}"
                    href="/sales">
                    <i class="bi bi-currency-dollar me-2"></i>
                    Sales
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('farms') ? 'fw-bold text-success' : 'text-success' }}"
                    href="/farms">
                    <i class="bi bi-truck me-2"></i>
                    Farms
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('cages') ? 'fw-bold text-success' : 'text-success' }}"
                    href="/cages">
                    <i class="bi bi-grid-3x3-gap me-2"></i>
                    Cages
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('animals') ? 'fw-bold text-success' : 'text-success' }}"
                    href="/animals">
                    <i class="bi bi-bug me-2"></i>
                    Animals
                </a>
            </li>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-success">
                <span>General Settings</span>
                <a class="link-success" href="#" aria-label="Add a new report">
                    <i class="bi bi-plus-circle"></i>
                </a>
            </h6>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('users') ? 'fw-bold text-success' : 'text-success' }}"
                        href="/users">
                        <i class="bi bi-people"></i>
                        Users
                    </a>
                </li>
            </ul>
    </div>
