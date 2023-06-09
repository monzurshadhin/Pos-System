<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link" href="{{route('purchase.order')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-house"></i></div>
                    Dashboard
                </a>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    POS System
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('purchase.order')}}">Purchase</a>
                        <a class="nav-link" href="{{route('purchase.list')}}">Purchase List</a>
                    </nav>
                </div>
            </div>
        </div>

    </nav>
</div>
