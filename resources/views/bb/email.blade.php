@extends('bb.layout.main')
@section('main-container')
<!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">Email</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="http://bbadmin.businessboosters.com.my">
                                        Home
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    Email
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body">
                <!-- Recent Transactions -->
                <div class="row">
                    <div id="recent-transactions" class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Recent Email</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-danger" data-bs-toggle="dropdown"
                                                    aria-expanded="false">Payment Status:
                                                    <span id="Status">All</span> <i class="fa-solid fa-caret-down"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li class="w-100"><a class="dropdown-item" href="#" onclick="changeType(' All')">All</a></li>
                                                    <li class="w-100"><a class="dropdown-item" href="#" onclick="changeType(' Paid')">Paid</a></li>
                                                    <li class="w-100"><a class="dropdown-item" href="#" onclick="changeType(' Pending')">Pending</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- <li>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-danger" data-bs-toggle="dropdown"
                                                    aria-expanded="false">Send to:
                                                    <span id="sendTo"> All </span><i class="fa-solid fa-caret-down"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li class="w-100"><a class="dropdown-item" href="#" onclick="changeType1(' All')">All</a></li>
                                                    <li class="w-100"><a class="dropdown-item" href="#" onclick="changeType1(' to all member')">to all member</a></li>
                                                    <li class="w-100"><a class="dropdown-item" href="#" onclick="changeType1(' to that already paid')">to that already paid</a></li>
                                                    <li class="w-100"><a class="dropdown-item" href="#" onclick="changeType1(' to all who did not vote')">to all who didn't vote</a></li>
                                                    <li class="w-100"><a class="dropdown-item" href="#" onclick="changeType1(' to all who vote No or Maybe')">to all who vote No or Maybe</a></li>
                                                </ul>
                                            </div>
                                        </li> -->
                                        <li>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-danger" data-bs-toggle="dropdown"
                                                    aria-expanded="false">Send Status:
                                                    <span id="Send">All</span> <i class="fa-solid fa-caret-down"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li class="w-100"><a class="dropdown-item" href="#" onclick="changeType2(' All')">All</a></li>
                                                    <li class="w-100"><a class="dropdown-item" href="#" onclick="changeType2(' Send')">Send</a></li>
                                                    <li class="w-100"><a class="dropdown-item" href="#" onclick="changeType2(' Not Send')">Not Send</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-danger" data-bs-toggle="dropdown"
                                                    aria-expanded="false">Date:
                                                    <span id="Date">All</span> <i class="fa-solid fa-caret-down"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li class="w-100"><a class="dropdown-item" href="#" onclick="changeType3(' All')">All</a></li>
                                                    <li class="w-100"><a class="dropdown-item" href="#" onclick="changeType3(' Today')">Today</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table id="recent-orders" class="table table-xl mb-0 multi-ordering">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0 w-5">#</th>
                                                <th class="border-top-0 w-10">Client Name</th>
                                                <th class="border-top-0 w-10">Event Title</th>
                                                <th class="border-top-0 w-10">Date</th>
                                                <th class="border-top-0 w-15">Send to</th>
                                                <th class="border-top-0 w-10">Payment Status</th>
                                                <th class="border-top-0 w-10">Send Status</th>
                                                <th class="border-top-0 w-20">Action</th>
                                            </tr>
                                        </thead>
                                        @php
                                            $count=0
                                        @endphp
                                        <tbody id="myTable">
                                            @php
                                                $count++
                                            @endphp
                                            @foreach ($email as $emails)
                                            <tr>
                                                <td>{{$count}}</td>
                                                <td class="text-truncate">John</td>
                                                <td class="text-truncate">{{$email}}</td>
                                                <td class="text-truncate">5-5-2023,5-6-2023</td>
                                                <td class="text-truncate">to all member</td>
                                                <td class="text-truncate">Pending</td>
                                                <td class="text-truncate">Send</td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-sm btn-outline-success round btn-block">Send</button>
                                                    <button type="button"
                                                        class="btn btn-sm btn-outline-danger round btn-block">Reminder</button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Recent Transactions -->


            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection