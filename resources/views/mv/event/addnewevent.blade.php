@extends('mv.layout.main')
@section('main-container')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-12 col-12 mb-2">
                <h3 class="content-header-title">Events</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">

                            <li class="breadcrumb-item">
                                <a href="/">
                                    Home
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                All Event
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
                                    <h4 class="card-title">Event</h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-h font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <a href={{asset('eventinfo')}} class="btn btn-primary btn-sm" id="new-customer"><i
                                                class="fa-solid fa-plus white"></i> Add a new event</a>
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
                                                    <th>Event Name</th>
                                                    <th>Audience</th>
                                                    <th>Venue</th>
                                                    <th>Start Date</th>
                                                    <th>End Date</th>
                                                    <th>Ticket Price(RM)</th>
                                                    <th>Email & SMS</th>
                                                    <th>Vote</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            @php
                                                $count=0;
                                            @endphp
                                            @foreach ($event as $events)
                                            @php
                                                $count++;
                                                $dates = explode(' - ', $events->datetime);
                                                $startDate = $dates[0];
                                                $endDate = $dates[1];
                                            @endphp
                                            <tbody>
                                                <tr id="category_id_10">
                                                    <td>{{$count}}</td>
                                                    <td>{{$events['eventname']}}</td>
                                                    <td>{{$events['audience']}}</td>
                                                    <td>{{$events['event_venue']}}</td>
                                                    <td>{{$startDate}}</td>
                                                    <td>{{$endDate}}</td>
                                                    <td>{{$events['price']}}</td>
                                                    <td>
                                                        <a href="/email/html/addNewEmail.html">Draft</a><br>
                                                        <a href="/email/html/addNewEmail.html">Ready to Send</a><br>
                                                        <a href="/email/html/addNewEmail.html">Sent</a><br>
                                                    </td>
                                                    <td>
                                                        @foreach(json_decode($events->voteby) as $vote)
                                                        <a>{{ $vote }}</a><br>
                                                      @endforeach
                                                    </td>
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
                                                                <a href="{{'editevent/'.$events['id']}}" class="dropdown-item" title="Edit">Edit
                                                                </a>
                                                                <a href="#" class="dropdown-item" title="Hide">Hide
                                                                </a>
                                                                <a href="{{'deletevent/'.$events['id']}}" class="dropdown-item" title="Remove" onclick="return confirm('Are you sure you want to delete this record?')">
                                                                    Delete
                                                                </a>
                                                                <a href="/vote/html/vote.html" class="dropdown-item"
                                                                    title="vote">
                                                                    Vote
                                                                </a>
                                                                <a href="{{ route('filter', ['id' => encrypt($events['id'])]) }}"
                                                                    class="dropdown-item">Email & SMS</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </td>
                                                </tr>
                                            </tbody>
                                            @endforeach                                            
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
@endsection