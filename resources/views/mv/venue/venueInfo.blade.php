@extends('mv.layout.main')

@section('main-container')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">Venue</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{url('/addnewvenue')}}">All Venues</a>
                                </li>
                                <li class="breadcrumb-item active">Add New Venue
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
                                        <form action="{{route('venueinfo')}}" id="venueinfo" method="POST" class="steps-validation wizard-notification">
                                            @csrf
                                       
                                            <!-- number-tab-steps steps-validation -->
                                            <!-- Step 1 -->
                                            <h6 id="steps-uid-0-h-0" tabindex="-1" class="title current">Venue Info</h6>
                                            <fieldset id="steps-uid-0-p-0" role="tabpanel"
                                                aria-labelledby="steps-uid-0-h-0" class="body current"
                                                aria-hidden="false">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <label for="venue_name" class="required">Venue Name</label>
                                                        <input type="text" value="" id="projectinput1"
                                                            class="form-control " placeholder="eg.Sam Event Hall"
                                                            name="venue_name" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="venue_address" class="required">Address</label>
                                                        <input type="text" value="" id="address1" class="form-control"
                                                            placeholder="eg.Puchong Utama" name="venue_address"
                                                            required>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="venue_City"
                                                                    class="required">City/Area</label>
                                                                <input type="text" id="venue_City" name="City"
                                                                    required="required" class="form-control"
                                                                    placeholder="eg.Puchong">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="venue_State" class="required">State</label>
                                                                <input type="text" id="venue_State" name="State"
                                                                    required="required" class="form-control"
                                                                    placeholder="eg.Selangor">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="venue_Postcode"
                                                                    class="required">Postcode</label>
                                                                <input type="text" id="venue_Postcode" name="Postcode"
                                                                    required="required" class="form-control"
                                                                    placeholder="eg.Selangor"
                                                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                                                    maxlength="5">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="venue_RentalPerDays" class="required">Rental
                                                                    per Days</label>
                                                                <input type="text" id="venue_RentalPerDays"
                                                                    name="RentalPerDays" required="required"
                                                                    class="form-control" placeholder="eg.RM1500"
                                                                    oninput="this.value = this.value.replace(/[^0-9RM.]/g, '').replace(/(\RR*)\R/g, '$1').replace(/(\MM*)\M/g, '$1').replace(/(\..*)\./g, '$1');">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="venue_Max Capacity" class="required">Max
                                                                    Capacity</label>
                                                                <input type="text" id="venue_MaxCapacity"
                                                                    name="MaxCapacity" required="required"
                                                                    class="form-control" placeholder="eg.100"
                                                                    oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </fieldset>
                                            <!-- Step 2 -->
                                            <h6>PIC Details</h6>
                                            <fieldset>
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <label for="PICName" class="required">PIC Name</label>
                                                        <input type="text" value="" id="PICNameInput"
                                                            class="form-control" placeholder="eg.Haresh" name="PICName"
                                                            required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="PICEmail" class="required">PIC Email</label>
                                                        <input type="email" value="" id="PICEmailInput"
                                                            class="form-control" placeholder="eg.Haresh@gmail.com"
                                                            name="PICEmail" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="PIC_H/P" class="required">PIC H/P</label>
                                                        <input type="tel" id="PIC_H/P" name="PICHP"
                                                            class="form-control" placeholder="eg.012-123 4561"
                                                            maxlength="13"
                                                            oninput="this.value = this.value.replace(/[^0-9- ]/g, '').replace(/(\--*)\-/g, '$1')"
                                                            required>
                                                    </div>
                                                </div>
                                            </fieldset>
                                             <!-- Step 3 -->
                                             <h6>Other Info</h6>
                                             <fieldset>
                                                 <div class="form-body checkbox-xl">
                                                     <div class="row">
                                                         <div class="col-6">
                                                             <div class="form-check checkbox-size">
                                                                 <input class="form-check-input checkbox" type="checkbox"
                                                                     value="No alcohol" id="flexCheckDefault" name="otherinfo[]">
                                                                 <label class="form-check-label" for="flexCheckDefault">
                                                                     No alcohol
                                                                 </label>
                                                             </div>
                                                             <div class="form-check checkbox-size">
                                                                 <input class="form-check-input checkbox" type="checkbox"
                                                                     value="No deco on wall" id="flexCheckDefault1" name="otherinfo[]">
                                                                 <label class="form-check-label" for="flexCheckDefault1">
                                                                     No deco on wall
                                                                 </label>
                                                             </div>
                                                             <div class="form-check checkbox-size">
                                                                 <input class="form-check-input checkbox" type="checkbox"
                                                                     value="No outside food or beverages" id="flexCheckDefault2" name="otherinfo[]">
                                                                 <label class="form-check-label" for="flexCheckDefault2">
                                                                     No outside food or beverages
                                                                 </label>
                                                             </div>
                                                             <div class="form-check checkbox-size">
                                                                 <input class="form-check-input checkbox" type="checkbox"
                                                                     value="No smoking or vaping" id="flexCheckDefault3" name="otherinfo[]">
                                                                 <label class="form-check-label" for="flexCheckDefault3">
                                                                     No smoking or vaping
                                                                 </label>
                                                             </div>
                                                             <div class="form-check checkbox-size">
                                                                 <input class="form-check-input checkbox" type="checkbox"
                                                                     value="No pets or animals" id="flexCheckDefault4" name="otherinfo[]">
                                                                 <label class="form-check-label" for="flexCheckDefault4">
                                                                     No pets or animals
                                                                 </label>
                                                             </div>
                                                             <div class="form-check checkbox-size">
                                                                 <input class="form-check-input" type="checkbox" value=""
                                                                     id="select-all" name="otherinfo[]">
                                                                 <label class="form-check-label" for="select-all">
                                                                     All
                                                                 </label>
                                                             </div>
                                                         </div>
                                                         <div class="col-6">
                                                             <div class="row">
                                                                 <div class="checkboxInput checkbox-size ">
                                                                     <input type="checkbox" id="myCheckbox" >
                                                                     <textarea type="text" class="w-90"
                                                                         id="myInput" name="textarea[]"></textarea>
                                                                 </div>
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
