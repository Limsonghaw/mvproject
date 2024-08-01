@extends('mv.layout.main')

@section('main-container')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-12 col-12 mb-2">
                    <h3 class="content-header-title">Venues</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">

                                <li class="breadcrumb-item">
                                    <a href="/">
                                        Home
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    All Venues
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <section id="pagination">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-head">
                                    <div class="card-header">
                                        <h4 class="card-title">Venues</h4>
                                        <a class="heading-elements-toggle"><i
                                                class="la la-ellipsis-h font-medium-3"></i></a>
                                        <div class="heading-elements">
                                            <a href="{{ url('/venueinfo') }}" class="btn btn-primary btn-sm"
                                                id="new-customer"><i class="fa-solid fa-plus white"></i> Add a new venue</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <div class="table-responsive">
                                            <table class="table table-white-space table-bordered alt-pagination">
                                                <thead>
                                                    <tr>
                                                        <th width="5%">#</th>
                                                        <th>Venue Name</th>
                                                        <th>State</th>
                                                        <th>Area</th>
                                                        <th>Capacity</th>
                                                        <th>Cost per day</th>
                                                        <th width="10%">Status</th>
                                                        <th width="10%">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $count = 0;
                                                    ?>
                                                    @foreach ($venue as $venues)
                                                        <?php
                                                        $count++;
                                                        ?>
                                                        <tr>
                                                            <td>{{ $count }}</td>
                                                            <td>{{ $venues['venuename'] }}</td>
                                                            <td>{{ $venues['state'] }}</td>
                                                            <td>{{ $venues['city_area'] }}</td>
                                                            <td>{{ $venues['maxcapacity'] }}</td>
                                                            <td>{{ $venues['rentalperday'] }}</td>
                                                            <td>{{ $venues['status'] }}</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-default" type="button"
                                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                                        aria-haspopup="true" aria-expanded="false">
                                                                        <i class="la la-cog"></i>
                                                                        <i class="fa-solid fa-caret-down"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuButton">
                                                                        <a href={{ 'editvenue/' . $venues['id'] }}
                                                                            class="dropdown-item" title="Edit">Edit
                                                                        </a>
                                                                        @if ($venues->status=='active')
                                                                            <a href={{'editvenuestatus/'.encrypt($venues->id).'/'.encrypt($venues->status='inactive')}} class="dropdown-item"
                                                                            title="Hide">Hide
                                                                            </a>
                                                                        @else
                                                                            <a href={{'editvenuestatus/'.encrypt($venues->id).'/'.encrypt($venues->status='active')}} class="dropdown-item"
                                                                            title="Show">Show
                                                                            </a>
                                                                        @endif
                                                                        <a class="dropdown-item" title="delete"
                                                                            href={{ 'deletevenue/' . $venues['id'] }}
                                                                            onclick="return confirm('Are you sure you want to delete this record?')">Delete</a>
                                                                    </div>
                                                                </div>
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
                    </div>
                </section>
            </div>

        </div>
    </div>
    <!-- END: Content-->
@endsection
