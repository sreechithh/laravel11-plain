<style>
    .extra-menu {
        min-width: 500px
    }

    @media (min-width: 320px) and (max-width: 767px) {
        .extra-menu {
            min-width: auto
        }
    }
</style>
<div class="navbar navbar-expand-md navbar-dark ">
    <div class="navbar-brand wmin-0 mr-5">
        @role("Admin")
        <a href="{{ route('admin.dashboard') }}" class="d-inline-block">
            <img src="{{getBaseUrl()}}assets/backend/global_assets/images/dashboard-logo.png"
                 alt="Dashboard">
            admin
        </a>
        @endrole

        @role("Restaurant Owner")
        <a href="{{ route('shop.dashboard') }}" class="d-inline-block">
            <img src="{{getBaseUrl()}}assets/backend/global_assets/images/dashboard-logo.png"
                 alt="Dashboard">
            shop
        </a>
        @endrole

        @role("Delivery Guy")
        <a href="{{ route('delivery.dashboard') }}" class="d-inline-block">
            <img src="{{getBaseUrl()}}assets/backend/global_assets/images/dashboard-logo.png"
                 alt="Dashboard">
            delivery
        </a>
        @endrole

        @if(isFranchise())

            <a href="{{ route('franchise.dashboard') }}" class="d-inline-block">
                <img src="{{getBaseUrl()}}assets/backend/global_assets/images/dashboard-logo.png"
                     alt="Dashboard">
                franchise
            </a>

        @endif

        @if(isMarketplaceStaff())

            <a href="{{ route('marketplace.dashboard') }}" class="d-inline-block">
                <img src="{{getBaseUrl()}}assets/backend/global_assets/images/dashboard-logo.png"
                     alt="Dashboard">
                marketplace
            </a>

        @endif

        @if(isShopManager())

            <a href="{{ route('shopManager.dashboard') }}" class="d-inline-block">
                <img src="{{getBaseUrl()}}assets/backend/global_assets/images/dashboard-logo.png"
                     alt="Dashboard">
                shop manager
            </a>

        @endif

    </div>
    <div class="d-md-none d-none d-sm-flex">
        <button class="navbar-toggler dropdown-toggle" type="button" data-toggle="collapse"
                data-target="#navbar-mobile">
            <span>{{ Auth::user()->name }}</span>
        </button>
        <div class="dropdown-menu dropdown-menu-right" id="navbar-mobile">
            <a href="{{ route('logout') }}" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
        </div>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown dropdown-user">
                <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle"
                   data-toggle="dropdown">
                    <span>{{ Auth::user()->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    @if(isFranchise() || isFranchiseStaff())
                        <a href="{{ route('franchise.auth.logout') }}" class="dropdown-item"><i
                                    class="icon-switch2"></i>
                            Logout</a>
                    @elseif(isMarketplaceStaff())
                        <a href="{{ route('marketplace.auth.logout') }}" class="dropdown-item"><i
                                    class="icon-switch2"></i>
                            Logout</a>
                    @else
                        <a href="{{ route('logout') }}" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
                    @endif
                </div>
            </li>
        </ul>
    </div>
</div>