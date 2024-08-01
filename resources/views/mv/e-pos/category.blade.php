    @extends('mv.layout.main')
    @section('main-container')
        {{-- addnewcategory --}}
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add New
                            Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('storecategory') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Category Name:</label>
                                <input type="text" class="form-control" name="category" placeholder="Enter category_name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Active:</label>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch">
                                    <input type="hidden" name="status" value="Active" id="hiddenStatus">
                                    <label class="custom-control-label" for="customSwitch"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save
                                    changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- addnewcategory --}}
        {{-- editmodal --}}
        <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="editmodal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Edit
                            Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('updatecategory') }}" method="POST">
                            @csrf
                            <input type="hidden" value="" name="id" id="id">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Category Name:</label>
                                <input type="text" class="form-control" id="category" name="category"
                                    placeholder="Enter category_name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Active:</label>
                                <div class="custom-control custom-switch">
                                    <input id="customSwitch2" class="custom-control-input customSwitch2" type="checkbox">
                                    <input type="hidden" name="status" value="Active" id="hiddenStatus2">
                                    <label class="custom-control-label" for="customSwitch2"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="Submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- editmodal --}}

        </div>
        {{-- editmodal --}}
        <div class="app-content content">
            <div class="content-overlay"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                    <div class="content-header-left col-md-12 col-12 mb-2">
                        <h3 class="content-header-title">SKU</h3>
                        <div class="row breadcrumbs-top">
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">

                                    <li class="breadcrumb-item">
                                        <a href="/">
                                            Home
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        SKU
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
                                            <h4 class="card-title">Category</h4>
                                            <a class="heading-elements-toggle"><i
                                                    class="la la-ellipsis-h font-medium-3"></i></a>
                                            <div class="heading-elements">
                                                <button class="btn btn-primary btn-sm" id="new-customer" data-toggle="modal"
                                                    data-target="#exampleModalCenter"><i
                                                        class="fa-solid fa-plus white"></i>Add
                                                    New Category</button>
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
                                                            <th>Category</th>
                                                            <th width="5%">Active</th>
                                                            <th>Quantity Of Product</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    @php
                                                        $count = 0;
                                                    @endphp
                                                    <tbody>
                                                        @foreach ($category as $categorys)
                                                            @php
                                                                $count++;
                                                            @endphp
                                                            <tr id="category_id_10">
                                                                <td>{{ $count }}</td>
                                                                <td>{{ $categorys['category'] }}</td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <div class="custom-control custom-switch">
                                                                            <input data-id="{{ $categorys->id }}"
                                                                                type="checkbox"
                                                                                class="custom-control-input toggle-class"
                                                                                id="customSwitch{{ $categorys->id }}"
                                                                                {{ $categorys->status === 'Active' ? 'checked' : '' }}>
                                                                            <label class="custom-control-label"
                                                                                for="customSwitch{{ $categorys->id }}"></label>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>10</td>
                                                                <td>
                                                                    <button class="btn btn-primary editbtn"
                                                                        value="{{ $categorys->id }}" title="Edit">Edit
                                                                    </button>
                                                                    <a href="{{ route('deletecategory', ['id' => $categorys->id]) }}"
                                                                        class="btn btn-danger" title="Delete">Delete
                                                                    </a>
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
    @endsection
    @section('categoryjs')
    <script>
        $(document).ready(function() {
            $(document).on('change', '.toggle-class', function() {
                var category_id = $(this).data('id');
                var status = this.checked ? 'Active' : 'Inactive';
    
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: "/updatetablestatus", 
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: category_id,
                        status: status
                    },
                    success: function(data) {
                        console.log(data.message);
                    }
                });
            });
        });

        const switchElement = document.getElementById("customSwitch");
        const hiddenStatusElement = document.getElementById("hiddenStatus");

        switchElement.addEventListener("change", function() {
            if (this.checked) {
                hiddenStatusElement.value = "Active";
            } else {
                hiddenStatusElement.value = "Inactive";
            }
        });

        const switchElement2 = document.getElementById("customSwitch2");
        const hiddenStatusElement2 = document.getElementById("hiddenStatus2");

        switchElement2.addEventListener("change", function() {
            if (this.checked) {
                hiddenStatusElement2.value = "Active";
            } else {
                hiddenStatusElement2.value = "Inactive";
            }
        });

        $(document).ready(function() {
            $(document).on('click', '.editbtn', function() {
                var ctg_id = $(this).val();
                // alert(ctg_id);
                $('#editmodal').modal('show');

                $.ajax({
                    type: "GET",
                    url: "/editcategory/" + ctg_id, 
                    success: function(response) {
                        console.log(response.category.category);
                        $('#category').val(response.category.category);
                        $('#id').val(ctg_id);
                        // $('#status').val(response.category.status);
                        // $('#status').prop('checked',response.category.status); // Assuming "active" is a boolean field
                        if (response.category.status === 'Active') {
                        $('.customSwitch2').prop('checked', true); // Turn switch on

                    } else {
                        $('.customSwitch2').prop('checked', false); // Turn switch off
                        const hiddenStatusElement2 = document.getElementById("hiddenStatus2");
                        hiddenStatusElement2.value = "Inactive";
                    }
                    }
                });
            })
        });
    </script>
    @endsection
