@extends('mv.layout.main')
@section('main-container')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-12 col-12 mb-2">
                    <h3 class="content-header-title">Event</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/">
                                        Home
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{asset('addnewevent')}}">
                                        All Event
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    All Email & SMS
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
                                        <h4 class="card-title">Email & SMS</h4>
                                        <a class="heading-elements-toggle"><i
                                                class="la la-ellipsis-h font-medium-3"></i></a>
                                        <div class="heading-elements">
                                            <a href="{{ route('emailinfo', ['id' => app('request')->input('id')]) }}" class="btn btn-primary btn-sm" id="new-customer">
                                                <i class="fa-solid fa-plus white"></i> Add a new Email/SMS
                                            </a>                                            
                                        </div>
                                        <div class="btn-group mt-1">
                                            <button type="button" class="btn btn-secondary">Type:<span
                                                    id="Type">All</span></button>
                                            <button type="button" class="btn btn-secondary" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="fa-solid fa-caret-down"></i>
                                            </button>
                                            @if (count($type) > 0)
                                                <div class="dropdown-menu" id="type">
                                                    <a class="dropdown-item" onclick="changeType(' All')"
                                                        value="">All</a>
                                                    @foreach ($type as $types)
                                                        <a class="dropdown-item"
                                                            onclick="changeType(' {{ $types }}')"
                                                            value="{{ $types }}">{{ $types }}</a>
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                        <div class="btn-group mt-1">
                                            <button type="button" class="btn btn-secondary">Send to:<span
                                                    id="sendTo">All</span></button>
                                            <button type="button" class="btn btn-secondary" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="fa-solid fa-caret-down"></i>
                                            </button>
                                            @if (count($send_to) > 0)
                                                <div class="dropdown-menu" id="send_to">
                                                    <a class="dropdown-item" onclick="changeType1(' All')"
                                                        value="">All</a>
                                                    @foreach ($send_to as $sendto)
                                                        <a class="dropdown-item"
                                                            onclick='changeType1(" {{ $sendto }}")'
                                                            value="{{ $sendto }}">{{ $sendto }}</a>
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                        <div class="btn-group mt-1">
                                            <button type="button" class="btn btn-secondary">Status:<span
                                                    id="Status">All</span></button>
                                            <button type="button" class="btn btn-secondary" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="fa-solid fa-caret-down"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#"
                                                    onclick="changeType2(' All')">All</a>
                                                <a class="dropdown-item" href="#"
                                                    onclick="changeType2(' Sent')">Sent</a>
                                                <a class="dropdown-item" href="#"
                                                    onclick="changeType2(' Ready to Send')">Ready to Send</a>
                                                <a class="dropdown-item" href="#"
                                                    onclick="changeType2(' Draft')">Draft</a>
                                            </div>
                                        </div>
                                        <div class="btn-group mt-1">
                                            <button type="button" class="btn btn-secondary">Payment:<span
                                                    id="Payment">All</span></button>
                                            <button type="button" class="btn btn-secondary" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="fa-solid fa-caret-down"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#"
                                                    onclick="changeType3(' All')">All</a>
                                                <a class="dropdown-item" href="#"
                                                    onclick="changeType3(' Paid')">Paid</a>
                                                <a class="dropdown-item" href="#"
                                                    onclick="changeType3(' Pending')">Pending</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <div class="table-responsive">
                                            <table id="datatable"
                                                class="table table-white-space table-bordered alt-pagination">
                                                <thead>
                                                    <tr>
                                                        <th width="5%">#</th>
                                                        <th>Type</th>
                                                        <th>Title</th>
                                                        <th>Send To</th>
                                                        <th>Send Date</th>
                                                        <th>Updated</th>
                                                        <th>Created</th>
                                                        <th>Status</th>
                                                        <th>Payment </th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tbody">
                                                    <?php
                                                    $count = 0;
                                                    ?>
                                                    @foreach ($email as $emails)
                                                        <?php
                                                        $count++;
                                                        ?>
                                                        <tr>
                                                            <td>{{ $count }}</td>
                                                            <td>{{ $emails['type'] }}</td>
                                                            <td>{{ $emails['title'] }}</td>
                                                            <td>{{ $emails['send_to'] }}</td>
                                                            <td>{{ $emails['date'] }}</td>
                                                            <td>{{ $emails['updated_at'] }}</td>
                                                            <td>{{ $emails['created_at'] }}</td>
                                                            <td>sent</td>
                                                            <td>Paid</td>
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
                                                                        <a href={{ 'editemail/' . $emails['id'] }}
                                                                            class="dropdown-item" title="Edit">Edit
                                                                        </a>
                                                                        <a class="dropdown-item" title="delete"
                                                                            href={{ 'deletemail/' . $emails['id'] }}
                                                                            onclick="return confirm('Are you sure you want to delete this record?')">Delete</a>
                                                                        <a href="#" class="dropdown-item"
                                                                            title="Payment">Payment
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </td>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>

$(document).ready(function() {
    $("#type a,#send_to a").on("click", function() {
        var type = $("#Type").text().trim();
        var send_to = $("#sendTo").text().trim(); // 修正此行，获取被点击的 <a> 标签的文本值
                $.ajax({
                    url: "{{ route('filter') }}",
                    type: "GET",
                    data: {
                        'type': type,
                        'send_to': send_to
                    },
                    success: function(data) {
                        console.log(data);
                        var email = data.email;
                        var html = '';
                        if (email.length > 0) {
                            for (let i = 0; i < email.length; i++) {
                                const updatedAt = new Date(email[i]['updated_at']);
                                const updatedAtDate = updatedAt.toLocaleString('en-US', {
                                    year: 'numeric',
                                    month: '2-digit',
                                    day: '2-digit',
                                    hour: '2-digit',
                                    minute: '2-digit',
                                    second: '2-digit',
                                    timeZone: 'Asia/Singapore'
                                });
                                const createAt = new Date(email[i]['created_at']);
                                const createAtDate = createAt.toLocaleString('en-US', {
                                    year: 'numeric',
                                    month: '2-digit',
                                    day: '2-digit',
                                    hour: '2-digit',
                                    minute: '2-digit',
                                    second: '2-digit',
                                    timeZone: 'Asia/Singapore'
                                });
                                html += '<tr>\
                                                <td>' + [i + 1] + '</td>\
                                                <td>' + email[i]['type'] + '</td>\
                                                <td>' + email[i]['title'] + '</td>\
                                                <td>' + email[i]['send_to'] + '</td>\
                                                <td>' + email[i]['date'] + '</td>\
                                                <td>' + updatedAtDate + '</td>\
                                                <td>' + createAtDate + '</td>\
                                                <td>send</td>\
                                                <td>Paid</td>\
                                                <td>\
                                                    <div class="dropdown">\
                                                        <button class="btn btn-default" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">\
                                                            <i class="la la-cog"></i>\
                                                            <i class="fa-solid fa-caret-down"></i>\
                                                        </button>\
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">\
                                                            <a href={{ 'edit/' . $emails['id'] }} class="dropdown-item" title="Edit">Edit\
                                                            </a>\
                                                            <a class="dropdown-item" title="delete" href={{ 'delete/' . $emails['id'] }}>Delete</a>\
                                                            <a href="#" class="dropdown-item" title="Payment">Payment\
                                                            </a>\
                                                        </div>\
                                                        </div>\
                                                </td>\
                                                </tr>';
                            }
                        } else {
                            html += '<tr>\
                                            <td colspan="10">No Data Found</td>\
                                            </tr>';
                        }
                        $('#tbody').html(html);
                    }
                });
            });
        });
    </script>
    <!-- END: Content-->
@endsection