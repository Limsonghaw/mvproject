@extends('mv.layout.main')
@section('main-container')
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
                                <li class="breadcrumb-item"><a href="addNewEvent.html">All Event</a>
                                </li>
                                <li class="breadcrumb-item active">Add New Event
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Form wizard with number tabs section start -->
                <section id="number-tabs">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form action="{{ route('updatevent') }}" id="eventinfo"
                                            class="steps-validation  wizard-notification" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $event['id'] }}">
                                            <!-- number-tab-steps steps-validation -->
                                            <!-- Step 1 -->
                                            <h6>Event Info</h6>
                                            <fieldset role="tabpanel" aria-labelledby="steps-uid-0-h-0" class="body current"
                                                aria-hidden="false">
                                                <div class="form-body">
                                                    <div class="form-group row">
                                                        <label for="name" class="col-md-4 label-control required">Event
                                                            Name</label>
                                                        <div class="col-md-8 mx-auto">
                                                            <input type="text" value="{{ $event['eventname'] }}"
                                                                id="projectinput1" class="form-control"
                                                                placeholder="Event Name" name="eventname" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="audiences"
                                                            class="col-md-4 label-control required">Audiences</label>
                                                        <div class="col-md-8 mx-auto">
                                                            <select name="audience" class="form-control" required>
                                                                <option value="" selected disabled>Pick Audiences
                                                                </option>
                                                                <option value="All"
                                                                    {{ $event->audience == 'All' ? 'selected' : '' }}>All
                                                                </option>
                                                                <option value="Customers"
                                                                    {{ $event->audience == 'Customers' ? 'selected' : '' }}>
                                                                    Customers</option>
                                                                <option value="Members"
                                                                    {{ $event->audience == 'Members' ? 'selected' : '' }}>
                                                                    Members</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="venue"
                                                            class="col-md-4 label-control required">Venue</label>
                                                        <div class="col-md-8 mx-auto">
                                                            <select name="event_venue" class="form-control" required>
                                                                <option value="" disabled>Pick Venue</option>
                                                                @foreach ($venue as $venues)
                                                                    <option value="{{ $venues['venuename'] }}"
                                                                        {{ $event->venue == $venues['venuename'] ? 'selected' : '' }}>
                                                                        {{ $venues['venuename'] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="name" class="col-md-4 label-control required">Event
                                                            Date & Time</label>

                                                        <div class="col-md-8 mx-auto">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control datetime"
                                                                    value="{{ $event['datetime'] }}" name="datetime"
                                                                    required>
                                                                <span class="input-group-addon">
                                                                    <i class="fa-regular fa-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="name" class="col-md-4 label-control">Artists <small
                                                                class="block">Enter the list of artists that will
                                                                perform in your event (press Enter after each
                                                                entry)</small></label>

                                                        <div class="col-md-8 mx-auto">
                                                            <textarea id="artist" rows="5" cols="80" class="form-control" name="artist"
                                                                placeholder="eg. 1.ABC&#10;2.ABC&#10;3.ABC">{{ $event['artist'] }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="name" class="col-md-4 label-control">Singer <small
                                                                class="block">Enter the list of singer that will
                                                                perform in your event (press Enter after each
                                                                entry)</small></label>

                                                        <div class="col-md-8 mx-auto">
                                                            <textarea id="singer" rows="5" cols="80" class="form-control" name="singer"
                                                                placeholder="eg. 1.ABC&#10;2.ABC&#10;3.ABC">{{ $event['singer'] }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="name" class="col-md-4 label-control required">Event
                                                            Language</label>

                                                        <div class="col-md-8 mx-auto">
                                                            <textarea id="language" rows="5" cols="80" class="form-control" name="language"
                                                                placeholder="eg. 1.English&#10;2.Chinese&#10;3.Malay" required>{{ $event['language'] }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="name" class="col-md-4 label-control required">Is
                                                            this event date online ?</label>

                                                        <div class="col-md-8 mx-auto">
                                                            <div class="d-inline-block custom-control custom-radio mr-1">
                                                                <input type="radio" class="custom-control-input"
                                                                    name="event_online" value="Yes"
                                                                    {{ $event->event_online == 'Yes' ? 'checked' : '' }}
                                                                    id="radioYes" checked>
                                                                <label class="custom-control-label"
                                                                    for="radioYes">Yes</label>
                                                            </div>
                                                            <div class="d-inline-block custom-control custom-radio mr-1">
                                                                <input type="radio" class="custom-control-input"
                                                                    name="event_online" value="No"
                                                                    {{ $event->event_online == 'No' ? 'checked' : '' }}
                                                                    id="radioNo">
                                                                <label class="custom-control-label"
                                                                    for="radioNo">No</label>
                                                            </div>
                                                            <div class="d-inline-block custom-control custom-radio mr-1">
                                                                <input type="radio" class="custom-control-input"
                                                                    name="event_online" value="Both"
                                                                    {{ $event->event_online == 'Both' ? 'checked' : '' }}
                                                                    id="radioBoth">
                                                                <label class="custom-control-label"
                                                                    for="radioBoth">Both</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="online_link" class="col-md-4 label-control">Online
                                                            Link</label>
                                                        <div class="col-md-8 mx-auto">
                                                            <input type="url" value="{{ $event['online_link'] }}"
                                                                id="online_link" class="form-control"
                                                                placeholder="Event online link" name="online_link">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="description"
                                                            class="col-md-4 label-control">Description</label>
                                                        <div class="col-md-8 mx-auto">
                                                            <textarea class="form-control summernote" name="description" placeholder="About Event" aria-invalid="false">{{ $event['description'] }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="file" class="col-md-4 label-control">Event
                                                            Image(thumbnail)<small class="block">Choose the right image
                                                                to represent your event (We recommend using a
                                                                1280 × 720 pixels with a minimum width of 640 pixels
                                                                image )</small></label>
                                                        <div class="col-md-8 mx-auto">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" name="thumbnail[]"
                                                                    multiple>
                                                                <label class="custom-file-label" for="inputGroupFile02"
                                                                    aria-describedby="inputGroupFile02">Choose
                                                                    file</label>
                                                                @foreach ($thumbnail as $thumbnails)
                                                                <a href="{{'/deletethumbnail/'.$thumbnails->ref}}" class="btn btn-danger">X</a>
                                                                    <img src="{{asset('storage/thumbnail/'.$thumbnails->thumbnail)}}" alt="thumbnail" height="100" width="100">                                                             
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="file2" class="col-md-4 label-control">Event
                                                            Image(Inside Page)<small class="block">Choose the right
                                                                image
                                                                to represent your event (We recommend using at least a
                                                                1200x628px (1.91:1 ratio) image )</small></label>
                                                        <div class="col-md-8 mx-auto">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" name="image[]"
                                                                    value="{{ $event['image'] }}" multiple>
                                                                <label class="custom-file-label" for="inputGroupFile03"
                                                                    aria-describedby="inputGroupFile03">Choose
                                                                    file</label>
                                                                @foreach ($image as $images)
                                                                    <a href="{{'/deleteimage/'.$images->ref}}" class="btn btn-danger">X</a>
                                                                    <img src="{{asset('storage/image/'.$images->image)}}" alt="image" height="100" width="100">                                                             
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <!-- Step 2 -->
                                            <h6>Event Ticket & Vote</h6>
                                            <fieldset>
                                                <div class="form-body">
                                                    <div class="form-group row">
                                                        <label for="name"
                                                            class="col-md-4 label-control required">Enable
                                                            sales for this ticket?</label>

                                                        <div class="col-md-8 mx-auto">
                                                            <div class="d-inline-block custom-control custom-radio mr-1">
                                                                <input type="radio" class="custom-control-input ticket"
                                                                    name="saleticket" value="Yes"
                                                                    {{ $event->saleticket == 'Yes' ? 'checked' : '' }}
                                                                    checked id="ticketYes" required>
                                                                <label class="custom-control-label"
                                                                    for="ticketYes">Yes</label>
                                                            </div>
                                                            <div class="d-inline-block custom-control custom-radio mr-1">
                                                                <input type="radio" class="custom-control-input ticket"
                                                                    name="saleticket" value="No"
                                                                    {{ $event->saleticket == 'No' ? 'checked' : '' }}
                                                                    id="ticketNo" required>
                                                                <label class="custom-control-label"
                                                                    for="ticketNo">No</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="price"
                                                            class="col-md-4 label-control required">Normal Price
                                                            RM</label>
                                                        <div class="col-md-8 mx-auto">
                                                            <input type="text" id="price" class="form-control"
                                                                placeholder="Price" name="price" required
                                                                value="{{ $event['price'] }}"
                                                                oninput="this.value = this.value.replace(/[^0-9RM.]/g, '').replace(/(\RR*)\R/g, '$1').replace(/(\MM*)\M/g, '$1').replace(/(\..*)\./g, '$1');">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="promotional_price"
                                                            class="col-md-4 label-control required">Promotion Price
                                                            RM</label>
                                                        <div class="col-md-8 mx-auto">
                                                            <input type="text"
                                                                value="{{ $event['promotional_price'] }}"
                                                                id="promotional_price" class="form-control"
                                                                placeholder="Promotional Price" name="promotional_price"
                                                                required
                                                                oninput="this.value = this.value.replace(/[^0-9RM.]/g, '').replace(/(\RR*)\R/g, '$1').replace(/(\MM*)\M/g, '$1').replace(/(\..*)\./g, '$1');">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="capacity"
                                                            class="col-md-4 label-control required">Capacity</label>
                                                        <div class="col-md-8 mx-auto">
                                                            <input type="text" value="{{ $event['capacity'] }}"
                                                                id="capacity" class="form-control" placeholder="eg.1000"
                                                                name="capacity" required
                                                                oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="per_attendee"
                                                            class="col-md-4 label-control required">Max Booking
                                                            Per Person</label>
                                                        <div class="col-md-8 mx-auto">
                                                            <input type="text" value="{{ $event['maxbooking'] }}"
                                                                id="maxbooking" class="form-control" placeholder="eg.5"
                                                                name="maxbooking" required
                                                                oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="points"
                                                            class="col-md-4 label-control required">Points</label>
                                                        <div class="col-md-8 mx-auto">
                                                            <input type="text" value="{{ $event['point'] }}"
                                                                id="point" class="form-control" placeholder="Points"
                                                                name="point" required
                                                                oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="per_attendee"
                                                            class="col-md-4 label-control required">Vote by</label>
                                                        <div class="col-md-8 mx-auto">
                                                            <select class="select2 form-control" multiple="multiple"
                                                                name="voteby[]" required>
                                                                <option value="" disabled selected>Select an option
                                                                    @php
                                                                        $event->voteby=json_decode($event->voteby);
                                                                    @endphp
                                                                @foreach ($voteby as $vote)
                                                                    <option value="{{ $vote['voteby'] }}"
                                                                        @if (in_array($vote['voteby'],$event->voteby)) selected @endif>
                                                                        {{ $vote['voteby'] }}
                                                                    </option><a href="{{'deleteoption/'.$vote['id']}}" class="btn btn-danger" title="Remove">
                                                                        Delete
                                                                    </a>
                                                                @endforeach
                                                            </select>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control mt-1"
                                                                    id="customVoteOption"
                                                                    placeholder="Add own Vote option">
                                                                <div class="input-group-append">
                                                                    <button class="btn btn-primary mt-1" type="button"
                                                                        id="addVoteOption">Add</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </fieldset>
                                            <!-- Step 3 -->
                                            <h6>Socail Media Links</h6>
                                            <fieldset>
                                                <div class="form-body">
                                                    <div class="form-group row">
                                                        <label for="youtube_video_url"
                                                            class="col-md-4 label-control">Youtube</label>
                                                        <div class="col-md-8 mx-auto">
                                                            <input type="url" value="{{ $event['youtube'] }}"
                                                                id="youtube" class="form-control"
                                                                placeholder="Event youtube link" name="youtube">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="instagram"
                                                            class="col-md-4 label-control">Instagram</label>
                                                        <div class="col-md-8 mx-auto">
                                                            <input type="url" value="{{ $event['instagram'] }}"
                                                                id="instagram" class="form-control"
                                                                placeholder="Event instagram link" name="instagram">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="facebook"
                                                            class="col-md-4 label-control">Facebook</label>
                                                        <div class="col-md-8 mx-auto">
                                                            <input type="url" value="{{ $event['facebook'] }}"
                                                                id="Facebook_url" class="form-control"
                                                                placeholder="Event facebook link" name="facebook">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="linkedin"
                                                            class="col-md-4 label-control">Twitter</label>
                                                        <div class="col-md-8 mx-auto">
                                                            <input type="url" value="{{ $event['twitter'] }}"
                                                                id="twitter" class="form-control"
                                                                placeholder="Event Twitter link" name="twitter">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="linkedin" class="col-md-4 label-control">Blog</label>
                                                        <div class="col-md-8 mx-auto">
                                                            <input type="url" value="{{ $event['blog'] }}"
                                                                id="blog" class="form-control"
                                                                placeholder="Event Blog link" name="blog">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="linkedin"
                                                            class="col-md-4 label-control">Website</label>
                                                        <div class="col-md-8 mx-auto">
                                                            <input type="url" value="{{ $event['website'] }}"
                                                                id="Website" class="form-control"
                                                                placeholder="Event Website link" name="website">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="linkedin"
                                                            class="col-md-4 label-control">Tiktok</label>
                                                        <div class="col-md-8 mx-auto">
                                                            <input type="url" value="{{ $event['tiktok'] }}"
                                                                id="tiktok" class="form-control"
                                                                placeholder="Event Tiktok link" name="tiktok">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <!-- Step 4 -->
                                            <h6>Organizers Info</h6>
                                            <fieldset>
                                                <div class="form-body">
                                                    <div class="form-group ">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="Name" class="required">Name</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" value="{{ $event['name'] }}"
                                                                    id="NameInput" class="form-control"
                                                                    placeholder="eg.Haresh" name="name" required
                                                                    oninput="this.value = this.value.replace(/[^A-Za-z ]/g, '')">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="Email" class="required">Email</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="email" value="{{ $event['email'] }}"
                                                                    id="EmailInput" class="form-control"
                                                                    placeholder="eg.Haresh@gmail.com" name="email"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="Phone_Number" class="required">Phone
                                                                    Number</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="Phone_Number"
                                                                    name="phonenumber" required="required"
                                                                    class="form-control" placeholder="eg.012-123 4561"
                                                                    maxlength="13" value="{{ $event['phonenumber'] }}"
                                                                    oninput="this.value = this.value.replace(/[^0-9- ]/g, '').replace(/(\--*)\-/g, '$1')">
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Handle the "Add" button click event
            $('#addVoteOption').click(function(e) {
                e.preventDefault(); // Prevent the default form submission

                var customOption = document.getElementById('customVoteOption').value;
                if (customOption !== '') {
                    var selectElement = document.querySelector('select[name="voteby[]"]');
                    var option = document.createElement('option');
                    option.value = customOption;
                    option.text = customOption;
                    selectElement.add(option);
                }
                // Get the custom vote option value
                var customOption = $('#customVoteOption').val();
                console.log(customOption);
                // Perform AJAX request to submit the custom vote option
                $.ajax({
                    url: "{{ route('voteby') }}", // Update with the appropriate URL
                    method: 'POST',
                    data: {
                        customVoteOption: customOption,
                        _token: '{{ csrf_token() }}' // Include the CSRF token
                    },
                    success: function(response) {
                        $('#customVoteOption').val('');
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                });
            });

        });
    </script>
@endsection
