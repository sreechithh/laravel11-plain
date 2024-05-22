<?php

use App\User;

/* @var boolean $isSingleShop */
$commissionType = config('settings.commissionType');
$isFixedCommission = $commissionType === \App\CommissionHistory::COMMISSION_FIXED;
?>

@if(config('settings.enableFranchise') === 'true')
    <li class="nav-item text-center">
        <a href="{{ route("admin.franchise.index") }}"
           class="navbar-nav-link {{ request()->is('admin/franchise*') ? 'active' : '' }}">
            <i class="icon-split mr-2"></i>
            <br>
            Franchise
        </a>
    </li>
@else
    <li class="nav-item text-center">
        <a href="{{ route("admin.dashboard") }}"
           class="navbar-nav-link {{ request()->is('admin/dashboard*') ? 'active' : '' }}">
            <i class="icon-meter-fast mr-2"></i>
            <br>
            Dashboard
        </a>
    </li>
    <li class="nav-item text-center dropdown">
        <a href="javascript:void(0)"
           class="navbar-nav-link dropdown-toggle  {{ Request::is('admin/sales-officers*') ? 'active' : '' }}"
           data-toggle="dropdown">
            <i class="icon-user-tie mr-2"></i>
            <br>
            Sales Officers
        </a>
        <div class="dropdown-menu">
            <a href="{{ route("admin.salesOfficers.index", ['type' => 'chiefSalesOfficer']) }}"
               class="dropdown-item {{ request('type') === 'chiefSalesOfficer'  ? 'active' : ''}}">
                <i class="icon-users4 mr-2"></i>
                Chief Sales Officer
            </a>
            <a href="{{ route("admin.salesOfficers.index", ['type' => 'zonalManager']) }}"
               class="dropdown-item {{ request('type') === 'zonalManager' ? 'active' : ''}}">
                <i class="icon-users4 mr-2"></i>
                Zonal Manager
            </a>
            <a href="{{ route("admin.salesOfficers.index", ['type' => 'regionalManager']) }}"
               class="dropdown-item {{ request('type') === 'regionalManager' ? 'active' : ''}}">
                <i class="icon-users4 mr-2"></i>
                Regional Manager
            </a>
            <a href="{{ route("admin.salesOfficers.index", ['type' => 'businessDevelopmentManager']) }}"
               class="dropdown-item {{ request('type') === 'businessDevelopmentManager' ? 'active' : ''}}">
                <i class="icon-users4 mr-2"></i>
                Business Development Manager
            </a>
            <a href="{{ route("admin.salesOfficers.index", ['type' => 'businessDevelopmentExecutive']) }}"
               class="dropdown-item {{ request('type') === 'businessDevelopmentExecutive' ? 'active' : ''}}">
                <i class="icon-users4 mr-2"></i>
                Business Development Executive
            </a>
        </div>
    </li>
@endif
<li class="nav-item text-center">
    <a href="{{ route("admin.shop.index") }}"
       class="navbar-nav-link {{ request()->is('*shop/index*') || request()->is('*commission/shop*') ? 'active' : '' }}">
        <i class="icon-store2 mr-2"></i>
        <br>
        Shops
    </a>
</li>
<li class="nav-item text-center">
    <a href="{{ route("admin.marketplaces.all") }}"
       class="navbar-nav-link {{ request()->is('admin/marketplaces*') ? 'active' : '' }}">
        <i class="icon-store mr-2"></i>
        <br>
        Marketplaces
    </a>
</li>
<li class="nav-item text-center dropdown">
    <a href="javascript:void(0)"
       class="navbar-nav-link dropdown-toggle  {{ Request::is('admin/users') || Request::is('admin/manage-delivery-guys') ? 'active' : '' }}"
       data-toggle="dropdown">
        <i class="icon-users2 mr-2"></i>
        <br>
        Users
    </a>
    <div class="dropdown-menu">
        <a href="{{ route("admin.users") }}"
           class="dropdown-item {{ Request::is('admin/users') ? 'active' : ''}}"> <i
                    class="icon-users4 mr-2"></i>
            All Users
        </a>
        <a href="{{ route('admin.manageRestaurantOwners') }}"
           class="dropdown-item {{ Request::is('admin/manage-restaurant-owners') ? 'active' : ''}}">
            <i class="icon-user-tie mr-2"></i>
            Shop Owners
        </a>
        <a href="{{ route('admin.manageDeliveryGuys') }}"
           class="dropdown-item {{ Request::is('admin/manage-delivery-guys') ? 'active' : ''}}">
            <i
                    class="icon-truck mr-2"></i>
            Delivery Guys</a>
        <a href="{{ route('admin.operationsManager') }}"
           class="dropdown-item {{ request()->is('*operationsManager/*') ? 'active' : ''}}">
            <i class="icon-users4 mr-2"></i>
            Operations Manager
        </a>
        <a href="{{ route('admin.ratings') }}"
           class="dropdown-item {{ request()->is('*ratings/*') ? 'active' : ''}}">
            <i class="fa fa-star" aria-hidden="true"></i>

            Ratings
        </a>
        {{--        <a href="{{ route('admin.deployer') }}"--}}
        {{--           class="dropdown-item {{ request()->is('*deployer/*') ? 'active' : ''}}">--}}
        {{--            <i class="icon-users4 mr-2"></i>
         <br>Deployer--}}
        {{--        </a>--}}
    </div>
</li>
<li class="nav-item text-center">
    <a href="{{ route("admin.orders") }}"
       class="navbar-nav-link {{ Request::is('admin/orders') ? 'active' : '' }}">
        <i class="icon-basket mr-2"></i>
        <br>
        Orders
    </a>
</li>
<li class="nav-item text-center dropdown">
    <a href="javascript:void(0)"
       class="navbar-nav-link dropdown-toggle  {{ Request::is('admin/sliders') || Request::is('admin/coupons') || Request::is('admin/notifications') ? 'active' : '' }}"
       data-toggle="dropdown">
        <i class="icon-strategy mr-2"></i>
        <br>
        Extras
    </a>
    <div class="dropdown-menu">
        <div class="row extra-menu">
            <div class="col-md-6">
                <a href="{{ route('admin.sliders') }}"
                   class="dropdown-item {{ Request::is('admin/sliders') ? 'active' : '' }}">
                    <i class="icon-image2 mr-2"></i>
                    Promo Sliders
                </a>
                <a href="{{ route("admin.restaurantCategorySlider") }}"
                   class="dropdown-item {{ Request::is('admin/restaurant-category-slider') ? 'active' : '' }}">
                    <i class="icon-grid52 mr-2"></i>
                    Shop Category Slider
                </a>
                <a href="{{ route('admin.coupons') }}"
                   class="dropdown-item {{ Request::is('admin/coupons') ? 'active' : '' }}">
                    <i class="icon-price-tags2 mr-2"></i>
                    Manage Coupons
                </a>
                <a href="{{ route('admin.pages') }}"
                   class="dropdown-item {{ Request::is('admin/pages') ? 'active' : '' }}">
                    <i class="icon-files-empty mr-2"></i>
                    Manage Pages
                </a>
                <a href="{{ route("admin.popularGeoLocations") }}"
                   class="dropdown-item {{ Request::is('admin/popular-geo-locations') ? 'active' : '' }}">
                    <i class="icon-location3 mr-2"></i>
                    Popular Geo Locations
                </a>
                <a href="{{ route('admin.notifications') }}"
                   class="dropdown-item {{ Request::is('admin/notifications') ? 'active' : '' }}">
                    <i class="icon-bubble-dots4 mr-2"></i>
                    Send Push Notifications
                </a>
                <a href="{{ route("contactLabels.index") }}"
                   class="dropdown-item {{ request()->is('*contactLabels/*') ? 'active' : '' }}">
                    <i class="icon-price-tag mr-2"></i>
                    Contact Labels
                </a>
                <a href="{{ route("countries.index") }}"
                   class="dropdown-item {{ request()->is('*contactLabels/*') ? 'active' : '' }}">
                    <i class="icon-flag3 mr-2"></i>
                    Flags
                </a>
                <a href="{{ route("shopCategories.index") }}"
                   class="dropdown-item {{ request()->is('*shopCategories/*') ? 'active' : '' }}">
                    <i class="icon-grid mr-2"></i>
                    Shop Categories
                </a>
                <a href="{{ route("backgroundProcesses.index") }}"
                   class="dropdown-item {{ request()->is('*backgroundProcesses/*') ? 'active' : '' }}">
                    <i class="icon-server mr-2"></i>
                    Background Processes
                </a>
                <a href="{{ route("admin.translations") }}"
                   class="dropdown-item {{ Request::is('admin/translations') ? 'active' : '' }}">
                    <i class="icon-font-size2 mr-2"></i>
                    Translations
                </a>
                <a href="{{ route("shopPackage.index") }}"
                   class="dropdown-item {{ Request::is('admin/translations') ? 'active' : '' }}">
                    <i class="icon-font-size2 mr-2"></i>
                    Shop Subscription plans
                </a>
            </div>
            <div class="col-md-6">
                <a href="{{ route('admin.restaurantpayouts') }}"
                   class="dropdown-item {{ Request::is('admin/restaurant-payouts') ? 'active' : '' }}">
                    <i class="icon-piggy-bank mr-2"></i>
                    Shop Payouts
                </a>
                <a href="{{ route("admin.deliveryCollections") }}"
                   class="dropdown-item {{ Request::is('admin/delivery-collections') ? 'active' : '' }}">
                    <i class="icon-cash3 mr-2"></i>
                    Delivery Collections
                </a>
                <a href="{{ route("admin.deliveryCollectionLogs") }}"
                   class="dropdown-item {{ Request::is('admin/delivery-collection-logs') ? 'active' : '' }}">
                    <i class="icon-database-time2 mr-2"></i>
                    Delivery Collection Logs
                </a>
                <a href="{{ route("admin.walletTransactions") }}"
                   class="dropdown-item {{ Request::is('admin/wallet/transactions') ? 'active' : '' }}">
                    <i class="icon-transmission mr-2"></i>
                    Wallet Transactions
                </a>
                <a href="{{ route("messageTemplates.index") }}"
                   class="dropdown-item {{ request()->is('*messageTemplates/*') ? 'active' : '' }}">
                    <i class="icon-mail5 mr-2"></i>
                    Message Templates
                </a>
                <a href="{{ route("admin.zonal.index") }}"
                   class="dropdown-item {{ request()->is('*zonal*') ? 'active' : '' }}">
                    <i class="icon-list mr-2"></i>
                    Zonal
                </a>
                <a href="{{ route("admin.states.index") }}"
                   class="dropdown-item {{ request()->is('*state*') ? 'active' : '' }}">
                    <i class="icon-list mr-2"></i>
                    States
                </a>
                <a href="{{ route("admin.districts.index") }}"
                   class="dropdown-item {{ request()->is('*district*') ? 'active' : '' }}">
                    <i class="icon-list mr-2"></i>
                    Districts
                </a>

                @if(config('settings.enableCommission') === 'true')
                    <a href="{{ route("admin.shop.dueList") }}"
                       class="dropdown-item {{ request()->is('*due-list*') ? 'active' : '' }}">
                        <i class="icon-calendar2 mr-2"></i>
                        Shop Due List
                    </a>
                @endif
                {{--                <a href="{{ route("buildQueues.index") }}"--}}
                {{--                   class="dropdown-item {{ request()->is('*buildQueues/*') ? 'active' : '' }}">--}}
                {{--                    <i class="icon-list mr-2"></i>--}}
                {{--                    Build Queue--}}
                {{--                </a>--}}
                @if(isAdmin())
                    <a href="{{ route('admin.merchantRequests') }}"
                        class="dropdown-item {{ request()->is('*merchant-requests*') ? 'active' : '' }}">
                        <i class="icon-list mr-2"></i>
                        Merchant Requests
                    </a>
                    <a href="{{ route('admin.contactUsRequests') }}"
                        class="dropdown-item {{ request()->is('*contact-us-requests*') ? 'active' : '' }}">
                        <i class="icon-list mr-2"></i>
                        Contact Us Requests
                    </a>
                @endif
                <a href="{{ route("helpCentreCategories.index") }}"
                   class="dropdown-item {{ request()->is('*helpCentreCategories/*') ? 'active' : '' }}">
                    <i class="icon-grid mr-2"></i>
                    Help Centre Categories
                </a>
                <a href="{{ route("helpCentre.index") }}"
                   class="dropdown-item {{ request()->is('*helpCentre/*') ? 'active' : '' }}">
                    <i class="icon-grid mr-2"></i>
                    Help Centre
                </a>
            </div>
        </div>
    </div>
</li>
<li class="nav-item text-center dropdown">
    <a href="javascript:void(0)" class="navbar-nav-link dropdown-toggle {{
                                Request::is('admin/masterItemCategories')  ||
                                Request::is('admin/cities')  ||
                                Request::is('admin/hsn')  ||
                                Request::is('admin/brands')  ||
                                Request::is('*/masterItems') ? 'active' : ''
                        }}" data-toggle="dropdown">
        <i class="icon-database4 mr-2"></i>
        <br>
        Data
    </a>
    <div class="dropdown-menu">
        <a href="{{ route("masterItemCategories.index") }}"
           class="dropdown-item {{ Request::is('*/masterItemCategories') ? 'active' : '' }}">
            <i class="icon-grid52 mr-2"></i>
            Master Categories
        </a>
        <a href="{{ route("masterItems.index") }}"
           class="dropdown-item {{ Request::is('*/masterItems') ? 'active' : '' }}">
            <i class="icon-grid mr-2"></i>
            Master Items
        </a>
        <a href="{{ route("admin.hsn") }}"
           class="dropdown-item {{ Request::is('admin/hsn') ? 'active' : '' }}">
            <i class="icon-grid mr-2"></i>
            HSN
        </a>
        <a href="{{ route("admin.cities") }}"
           class="dropdown-item {{ Request::is('admin/cities') ? 'active' : '' }}">
            <i class="icon-location3 mr-2"></i>
            Cities
        </a>
        <a href="{{ route("brands.index") }}"
           class="dropdown-item {{ request()->is('*brands/*') ? 'active' : '' }}">
            <i class="icon-price-tag mr-2"></i>
            Brands
        </a>
        <a href="{{ route("admin.itemcategories") }}"
           class="dropdown-item {{ Request::is('admin/itemcategories') ? 'active' : '' }}">
            <i class="icon-grid52 mr-2"></i>
            Item Categories
        </a>
        <a href="{{ route("admin.items") }}"
           class="dropdown-item {{ Request::is('admin/items') ? 'active' : '' }}">
            <i class="icon-grid mr-2"></i>
            Items
        </a>
    </div>
</li>
<ul class="navbar-nav ml-md-auto">
    <li class="nav-item text-center">
        <a href="{{ route("admin.reports.earnings") }}"
           class="navbar-nav-link {{ request()->is('*report/*')  ? 'active' : ''}}">
            <i class="icon-coin-dollar mr-2"></i>
            <br>
            Reports
        </a>
    </li>
</ul>

@if(config('settings.enableCommission') === 'true')
    <li class="nav-item text-center dropdown">
        <a href="javascript:void(0)" class="navbar-nav-link dropdown-toggle {{
            Request::is('*commission/approval-list*') || request()->is('*/commission-history') || request()->is('*due-list*')
             || request()->is('*/commission/franchise') || request()->is('*/fixed-commission-history')
             || Request::is('*franchise-commission-history/list')  || request()->is('*/franchise-fixed-commission/pay-list')
             || Request::is('*commission/franchise-commission*')
            ? 'active' : '' }}" data-toggle="dropdown">
            <i class="icon-percent mr-2"></i>
            <br>
            Commissions
        </a>
        <div class="dropdown-menu">
            <a href="{{ route("admin.shop.dueList") }}"
               class="dropdown-item {{ request()->is('*due-list*') ? 'active' : '' }}">
                <i class="icon-calendar2 mr-2"></i>
                Shop Due List
            </a>

            @if($isFixedCommission)
                <a href="{{ route("admin.shop.fixedCommission.approvalList") }}"
                   class="dropdown-item {{ Request::is('*/fixed-commission/approval-list') ? 'active' : '' }}">
                    <i class="icon-store mr-2"></i>
                    Shop Settlement Requests
                </a>
                <a href="{{ route("admin.shop.fixedCommissionHistory") }}"
                   class="dropdown-item {{ Request::is('*/fixed-commission-history') ? 'active' : '' }}">
                    <i class="icon-store mr-2"></i>
                    Shop Settlement History
                </a>

                @if(config('settings.enableFranchise') === 'true')
                    <a href="{{ route("admin.commission.fixedFranchiseCharge.payList") }}"
                       class="dropdown-item {{ Request::is('*franchise-fixed-commission/pay-list') ? 'active' : '' }}">
                        <i class="icon-split mr-2"></i>
                        Franchise Settlements
                    </a>
                    <a href="{{ route("admin.commission.fixedFranchiseChargeHistory") }}"
                       class="dropdown-item {{ Request::is('*fixed-franchise-commission-history/list') ? 'active' : '' }}">
                        <i class="icon-split mr-2"></i>
                        Franchise Settlement History
                    </a>
                @endif
            @else
                <a href="{{ route("admin.shop.commission.approvalList") }}"
                   class="dropdown-item {{ Request::is('*/commission/approval-list') ? 'active' : '' }}">
                    <i class="icon-store mr-2"></i>
                    Shop Settlement Requests
                </a>
                <a href="{{ route("admin.shop.commissionHistory") }}"
                   class="dropdown-item {{ Request::is('*/commission-history') ? 'active' : '' }}">
                    <i class="icon-store mr-2"></i>
                    Shop Settlement History
                </a>

                @if(config('settings.enableFranchise') === 'true')
                    <a href="{{ route("admin.commission.franchiseCommission.index") }}"
                       class="dropdown-item {{ Request::is('*commission/franchise-commission') ? 'active' : '' }}">
                        <i class="icon-split mr-2"></i>
                        Franchise Settlements
                    </a>
                    <a href="{{ route("admin.commission.franchiseChargeHistory.list") }}"
                       class="dropdown-item {{ Request::is('*franchise-commission-history/list') ? 'active' : '' }}">
                        <i class="icon-split mr-2"></i>
                        Franchise Settlement History
                    </a>
                @endif
            @endif
        </div>
    </li>
@endif

<ul class="navbar-nav ml-md-auto">
    <li class="nav-item text-center">
        <a href="{{ route('admin.settings') }}"
           class="navbar-nav-link {{ Request::is('admin/settings') ? 'active' : '' }}"
           data-popup="tooltip" title="All Settings" data-placement="bottom">
            <i class="icon-cog3 mr-2"></i>
            <br>
            Settings
        </a>
    </li>
</ul>
