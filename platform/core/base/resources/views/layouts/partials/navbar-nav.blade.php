<ul @class(['navbar-nav', $navbarClass ?? null])>

    @foreach (DashboardMenu::getAll() as $menu)
        @include('core/base::layouts.partials.navbar-nav-item', [
            'menu' => $menu,
            'autoClose' => $autoClose,
            'isNav' => true,
        ])
    @endforeach

    <li class="nav-item">
        <ul @class(['navbar-nav', $navbarClass ?? null])>

    @foreach (DashboardMenu::getAll() as $menu)
        @include('core/base::layouts.partials.navbar-nav-item', [
            'menu' => $menu,
            'autoClose' => $autoClose,
            'isNav' => true,
        ])
    @endforeach
    <li class="nav-item">
        <a class="nav-link nav-priority-14" href="#" id="cms-plugins-real-estate-coupons" title="Coupons">
            <span class="nav-link-icon d-md-none d-lg-inline-block" title="Coupons">
                <x-core::icon name="ti ti-point" />
            </span>
            <span class="nav-link-title text-truncate"> Enquiries </span>
        </a>
    </li>
</ul>
