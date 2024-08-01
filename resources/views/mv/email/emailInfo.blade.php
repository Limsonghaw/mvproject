    @extends('mv.layout.main')

@section('main-container')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">Event</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{asset('addnewevent')}}">All Event</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{asset('addnewemail')}}">All Email & SMS</a>
                                </li>
                                <li class="breadcrumb-item active">Add new Email/SMS
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body"><!-- Form wizard with number tabs section start -->
                <section id="number-tabs">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form action="{{route('addemail')}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="event_id" value="{{app('request')->input('id')}}" >
                                            <div class="form-body">
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="Name" class="required">Type</label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="radiotype" id="Email" value="email" checked>
                                                                <label class="form-check-label" for="Email">
                                                                    Email
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="radiotype" id="SMS" value="sms">
                                                                <label class="form-check-label"
                                                                    for="SMS">
                                                                        SMS
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="Title" class="required">Title</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" value="" id="Title" class="form-control"
                                                                placeholder="Title" name="title">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="Name" class="required">Send to</label>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="sendtoradio" id="toAllMember" value="to all member" checked>
                                                                <label class="form-check-label" for="toAllMember">
                                                                    to all member
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="sendtoradio" id="toThatAlreadyPaid" value="to that already paid">
                                                                <label class="form-check-label" for="toThatAlreadyPaid">
                                                                    to that already paid
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="sendtoradio" id="toAllWhoDidNotVote" value="to all who didn't vote">
                                                                <label class="form-check-label"
                                                                    for="toAllWhoDidNotVote">
                                                                    to all who didn't vote
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="sendtoradio" id="toAllWhoVoteNoOrMaybe" value="to all who vote No or Maybe">
                                                                <label class="form-check-label"
                                                                    for="toAllWhoVoteNoOrMaybe">
                                                                    to all who vote No or Maybe
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="Email" class="required">Date</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control dates"
                                                                placeholder="Pick the multiple dates" name="multipledate" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="Phone_Number" class="required">Content</label>
                                                        </div>
                                                        <div class="col-md-8 mx-auto">
                                                            <textarea class="form-control summernote" name="content"
                                                                placeholder="About Event"
                                                                aria-invalid="false"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-md-1 offset-10">
                                                          <button type="button" class="btn btn-secondary" onclick="location.href='addNewEmail.html'">Cancel</button>
                                                        </div>
                                                        <div class="col-md-1">
                                                          <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                      </div>
                                                </div>
                                            </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Form wizard with number tabs section end -->
            </div>
        </div>
    </div>
    <!-- END: Content-->
    @endsection