<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a href="/home"><i class="la la-home"></i><span class="menu-title"
                        data-i18n="Home">Dashboard</span></a></li>

            <li class=" navigation-header"><span data-i18n="Shop">Shop</span><i class="la la-ellipsis-h"
                    data-toggle="tooltip" data-placement="right" data-original-title="Shop"></i></li>
            <li class=" nav-item"><a href="#"><i class="la la-sitemap"></i><span class="menu-title"
                        data-i18n="Category">Category </span></a>
                <ul class="menu-content">
                    <li class=""><a class="menu-item"
                            href="http://bbadmin.businessboosters.com.my/category"><i></i><span
                                data-i18n="Category">Category</span></a></li>
                    <li class=""><a class="menu-item"
                            href="http://bbadmin.businessboosters.com.my/category/create"><i></i><span
                                data-i18n="Add Category">Add Category</span></a></li>

                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-table"></i><span class="menu-title"
                        data-i18n="Brands">Brands </span></a>
                <ul class="menu-content">
                    <li class=""><a class="menu-item"
                            href="http://bbadmin.businessboosters.com.my/brand"><i></i><span
                                data-i18n="Brands">Brands</span></a></li>
                    <li class=""><a class="menu-item"
                            href="http://bbadmin.businessboosters.com.my/brand/create"><i></i><span
                                data-i18n="Add Brand">Add Brand</span></a></li>

                </ul>
            </li>

            <li class=" nav-item"><a href="#"><i class="la la-database"></i><span class="menu-title"
                        data-i18n="Products">Products </span></a>
                <ul class="menu-content">
                    <li class=""><a class="menu-item"
                            href="http://bbadmin.businessboosters.com.my/product"><i></i><span
                                data-i18n="Category">Product</span></a></li>
                    <li class=""><a class="menu-item"
                            href="http://bbadmin.businessboosters.com.my/product/create"><i></i><span
                                data-i18n="Add Category">Add Product</span></a></li>

                </ul>
            </li>
            <li class=" navigation-header"><span data-i18n="App">App</span><i class="la la-ellipsis-h"
                    data-toggle="tooltip" data-placement="right" data-original-title="App"></i></li>
            <li class=" nav-item"><a href="#"><i class="la la-tasks"></i><span class="menu-title"
                        data-i18n="Clients">Campaign</span></a>
                <ul class="menu-content">
                    <li class="{{ (request()->is('bbemaillistingpage')) ? 'active' : '' }}"><a class="menu-item" href="{{asset('bbemaillistingpage')}}"><i></i><span
                                data-i18n="Email">Email</span></a>
                    </li>
                    <li class="{{ (request()->is('bbsmslistingpage')) ? 'active' : '' }}"><a class="menu-item" href="{{asset('bbsmslistingpage')}}"><i></i><span data-i18n="SMS">SMS</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-user-secret"></i><span class="menu-title"
                        data-i18n="Agents Detail">Agents Detail </span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href=""><i></i><span data-i18n="Active">Active</span></a></li>
                    <li><a class="menu-item" href=""><i></i><span data-i18n="Not Active">Not Active</span></a></li>

                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-briefcase"></i><span class="menu-title"
                        data-i18n="Clients">Clients</span></a>
                <ul class="menu-content">
                    <li class=""><a class="menu-item"
                            href="http://bbadmin.businessboosters.com.my/client/clients"><i></i><span
                                data-i18n="Client List">Clients List</span></a></li>
                    <li class=""><a class="menu-item"
                            href="http://bbadmin.businessboosters.com.my/client/member-categories"><i></i><span
                                data-i18n="Category">Category</span></a></li>
                    <li><a class="menu-item" href=""><i></i><span data-i18n="Category Request">Category
                                Request</span></a></li>
                    <li class=""><a class="menu-item"
                            href="http://bbadmin.businessboosters.com.my/points"><i></i><span
                                data-i18n="Purchase Points">Purchase Points</span></a></li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-television"></i><span class="menu-title"
                        data-i18n="Templates">Templates</span></a>
                <ul class="menu-content">
                    <li class=""><a class="menu-item"
                            href="http://bbadmin.businessboosters.com.my/global-email-templates"><i></i><span
                                data-i18n="Category">Email</span></a></li>
                    <li><a class="menu-item" href=""><i></i><span data-i18n="Client List">SMS</span></a></li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-tasks"></i><span class="menu-title"
                        data-i18n="Clients">Roles & Permissions</span></a>
                <ul class="menu-content">
                    <li class=""><a class="menu-item"
                            href="http://bbadmin.businessboosters.com.my/roles"><i></i><span
                                data-i18n="All Roles">All Roles</span></a></li>
                    <li class=""><a class="menu-item"
                            href="http://bbadmin.businessboosters.com.my/roles/create"><i></i><span
                                data-i18n="Create Role">Create Role</span></a></li>
                </ul>
            </li>
            <li class=" nav-item "><a href="http://bbadmin.businessboosters.com.my/admins"><i
                        class="la la-user"></i><span class="menu-title" data-i18n="Admins">Admins</span></a></li>
            <li class=" nav-item"><a href="#" target="_blank"><i class="la la-file-text"></i><span
                        class="menu-title" data-i18n="Activity Log">Activity Log</span></a></li>
            <li class=" nav-item"><a href="http://bbadmin.businessboosters.com.my/clear-cache"><i
                        class="la la-creative-commons"></i><span class="menu-title" data-i18n="Clear Cache">Clear
                        Cache</span></a></li>
        </ul>
    </div>
</div> <!-- END: Main Menu-->