    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a href="dashboard"><i class="la la-home"></i><span class="menu-title"
                            data-i18n="Home">Dashboard</span></a></li>
                <li class=" nav-item"><a href="http://mv.snaprewards.com.my/admin/company"><i
                            class="la la-briefcase"></i><span class="menu-title" data-i18n="Home">Your
                            Company</span></a></li>
                <li class=" nav-item"><a href="#"><i class="la la-users"></i><span class="menu-title"
                            data-i18n="MembersAccount">Members Account</span></a>
                    <ul class="menu-content">
                        <li class=""><a class="menu-item" href="http://mv.snaprewards.com.my/admin/members"><i></i><span
                                    data-i18n="Member List">Member List</span></a></li>
                        <!--<li class=""><a class="menu-item" href="http://mv.snaprewards.com.my/admin/members"><i></i><span data-i18n="Bulk">Bulk upload</span></a></li>-->
                    </ul>
                </li>

                <!--<li class=" nav-item"><a href="#"><i class="la la-user"></i><span class="menu-title" data-i18n="CustomerList">Customer List</span></a>
                <ul class="menu-content">
                    <li class=""><a class="menu-item" href=""><i></i><span data-i18n="Client List">Active</span></a></li>
                    <li class=""><a class="menu-item" href=""><i></i><span data-i18n="Not active">Not active</span></a></li>
                </ul>
            </li>-->

                <!--<li class=" nav-item"><a href="#"><i class="la la-money"></i><span class="menu-title" data-i18n="Payment">Payment</span></a>
                <ul class="menu-content">
                    <li class=""><a class="menu-item" href=""><i></i><span data-i18n="Payment Summary">Payment Summary</span></a></li>
                    <li class=""><a class="menu-item" href=""><i></i><span data-i18n="Points Summary">Points Summary</span></a></li>
                    <li class=""><a class="menu-item" href=""><i></i><span data-i18n="Payment Summary">Latest Promotion Summary</span></a></li>
                    <li class=""><a class="menu-item" href=""><i></i><span data-i18n="Points Summary">Event Summary</span></a></li>
                    <li class=""><a class="menu-item" href=""><i></i><span data-i18n="Points Expiry">Points Expiry</span></a></li>
                </ul>
            </li>-->

                <!--<li class=" nav-item"><a href="#"><i class="la la-money"></i><span class="menu-title" data-i18n="Latest Promotion">Latest Promotion</span></a>
                <ul class="menu-content">
                    
                    <li class=""><a class="menu-item" href="http://mv.snaprewards.com.my/admin/elfinder"><i></i><span data-i18n="Detail">Detail</span></a></li> 
                    <li class=""><a class="menu-item" href=""><i></i><span data-i18n="Summary">Summary</span></a></li>
                    <li class=""><a class="menu-item" href=""><i></i><span data-i18n="Completed">Completed</span></a></li>
                </ul>
            </li>-->

                <li class=" nav-item"><a href="#"><i class="las la-person-booth"></i><span class="menu-title"
                            data-i18n="Events">Events</span></a>
                    <ul class="menu-content">
                        <li class="{{ (request()->is('addnewvenue','venueinfo','editvenue/*')) ? 'active' : '' }}"><a class="menu-item"
                                href="{{asset('addnewvenue')}}"><i></i><span
                                    data-i18n="Summary">Venues</span></a></li>
                        <li class="{{ (request()->is('addnewevent','eventinfo','emailinfo','addnewemail','editemail/*','editevent/*')) ? 'active' : '' }}" ><a class="menu-item" href="{{asset('addnewevent')}}"><i></i><span
                                    data-i18n="Summary">Event Detail</span></a></li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="las la-store"></i></i><span class="menu-title"
                    data-i18n="Events">E-POS</span></a>
            <ul class="menu-content">
                <li class="{{ (request()->is('category')) ? 'active' : '' }} "><a class="menu-item"
                        href="{{ asset('category') }}"><i></i><span data-i18n="Summary">Catagory</span></a></li>
                <li class="{{ (request()->is('sku')) ? 'active' : '' }}"><a class="menu-item"
                        href="{{asset('sku')}}"><i></i><span data-i18n="Summary">SKU</span></a></li>
                <li class="sidebar-active-Event"><a class="menu-item" href="../html/trigger.html"><i></i><span
                            data-i18n="Summary">
                            Trigger</span></a></li>
                <li class="sidebar-active-Event"><a class="menu-item" href="#"><i></i><span data-i18n="Summary">
                            E-Receipt</span></a>
                    <ul class="menu-content">
                        <li class="sidebar-active-Venues"><a class="menu-item"
                                href="../html/receiptemplate.html"><i></i><span data-i18n="Summary">
                                    Receipt Template</span></a></li>
                        <li class="sidebar-active-Event"><a class="menu-item"
                                href="../html/receiptinfo.html"><i></i><span data-i18n="Summary">
                                    Receipt Info</span></a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="las la-person-booth"></i><span class="menu-title"
                    data-i18n="Events">Receipt</span></a>
            <ul class="menu-content">
                <li class="sidebar-active-Venues"><a class="menu-item"
                        href="../html/receiptsummary.html"><i></i><span data-i18n="Summary">Receipt
                            Summary</span></a></li>
                <li class="sidebar-active-Event"><a class="menu-item"
                        href="../html/categorysummary.html"><i></i><span data-i18n="Summary">
                            Category Summary</span></a></li>
            </ul>
        </li>
                <li class=" nav-item"><a href="#"><i class="las la-mail-bulk"></i><span class="menu-title"
                            data-i18n="Template">Template</span></a>
                    <ul class="menu-content">
                        <li class=""><a class="menu-item"
                                href="http://mv.snaprewards.com.my/admin/templates/email"><i></i><span
                                    data-i18n="Email">Email</span></a></li>
                        <!--<li class=""><a class="menu-item" href=""><i></i><span data-i18n="SMS">SMS</span></a></li>
                    <li class=""><a class="menu-item" href=""><i></i><span data-i18n="Push Notification">Push Notification</span></a></li>-->
                    </ul>
                </li>

                <!--<li class=" nav-item"><a href="#"><i class="la la-money"></i><span class="menu-title" data-i18n="Report">Report</span></a>
                <ul class="menu-content">
                    <li class=""><a class="menu-item" href=""><i></i><span data-i18n="Member list">Member list</span></a></li>
                    <li class=""><a class="menu-item" href=""><i></i><span data-i18n="Customer List">Customer List</span></a></li>
                    <li class=""><a class="menu-item" href=""><i></i><span data-i18n="Member Points summary">Member Points summary</span></a></li>
                    <li class=""><a class="menu-item" href=""><i></i><span data-i18n="Customer_Points summary">Customer_Points summary</span></a></li>
                    <li class=""><a class="menu-item" href=""><i></i><span data-i18n="Customer Redemption Detail">Customer Redemption Detail</span></a></li>
                </ul>
            </li>
            
            <li class=" nav-item"><a href="#"><i class="la la-money"></i><span class="menu-title" data-i18n="Points">Points</span></a>
                <ul class="menu-content">
                    <li class=""><a class="menu-item" href=""><i></i><span data-i18n="Purchase Points">Purchase Points</span></a></li>
                    <li class=""><a class="menu-item" href=""><i></i><span data-i18n="Points Purchase History">Points Purchase History</span></a></li>
                </ul>
            </li>
            
            
            
            <li class=" nav-item"><a href="#"><i class="la la-money"></i><span class="menu-title" data-i18n="Roles & Permissions">Roles & Permissions</span></a>
                <ul class="menu-content">
                    <li class=""><a class="menu-item" href=""><i></i><span data-i18n="All Roles">All Roles</span></a></li>
                    <li class=""><a class="menu-item" href=""><i></i><span data-i18n="Create Role">Create Role</span></a></li>
                </ul>
            </li>
            <li class="nav-item"><a href="#"><i class="la la-unlock"></i><span class="menu-title" data-i18n="Activity Log">Activity Log</span></a></li>-->
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->