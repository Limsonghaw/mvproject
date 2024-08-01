@extends('mv.layout.main')
@section('main-container')
    {{-- addnewsku --}}
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add New
                        SKU</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('storesku') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Category Name:</label>
                            <select class="select2 form-control" name="Category">
                                <option value="all" selected disabled>Please
                                    choose one category</option>
                                @foreach ($category as $categorys)
                                    <option value="{{ $categorys->category }}">{{ $categorys->category }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">SKU
                                Name:</label>
                            <input type="text" class="form-control" name="SKUname" placeholder="Enter category_name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Price(RM):</label>
                            <input type="text" class="form-control" name="Price" placeholder="Enter category_name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Quantity:</label>
                            <input type="text" class="form-control" name="Quantity" placeholder="Enter category_name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Trigger:</label>
                            <input type="text" class="form-control" name="Trigger" placeholder="Enter category_name">
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="Submit" class="btn btn-primary">Save
                                changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- addnewsku --}}
    {{-- editmodal --}}
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit
                        SKU</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('updatesku') }}" method="POST">
                        @csrf
                        <input type="hidden" id="sku_id" name="sku_id">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Category Name:</label>
                            <select class="select2 form-control" id="Category" class="Category">
                                <option value="all">Please choose one category</option>
                                @foreach ($category as $categorys)
                                    <option value="{{ $categorys->category }} {{ $categorys->category ? 'selected' : '' }}">
                                        {{ $categorys->category }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">SKU
                                Name:</label>
                            <input type="text" class="form-control" id="SKUname" name="SKUname"
                                placeholder="Enter category_name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Price(RM):</label>
                            <input type="text" class="form-control" id="Price" name="Price"
                                placeholder="Enter category_name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Quantity:</label>
                            <input type="text" class="form-control" id="Quantity" name="Quantity"
                                placeholder="Enter category_name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Trigger:</label>
                            <input type="text" class="form-control" id="Trigger" name="Trigger"
                                placeholder="Enter category_name">
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="Submit" class="btn btn-primary">Update
                                changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- editmodal --}}
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-12 col-12 mb-2">
                    <h3 class="content-header-title">Product Listing Page</h3>
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
                                        <a class="heading-elements-toggle"><i
                                                class="la la-ellipsis-h font-medium-3"></i></a>
                                        <div class="heading-elements">
                                            <button class="btn btn-primary btn-sm" id="new-customer" data-toggle="modal"
                                                data-target="#exampleModalCenter"><i
                                                    class="fa-solid fa-plus white"></i>Add
                                                New SKU</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <div class="table-responsive">
                                            <form>
                                                <table class="table table-white-space table-bordered alt-pagination">
                                                    <thead>
                                                        <tr>
                                                            <th width="5%">#</th>
                                                            <th>Category</th>
                                                            <th>SKU Name</th>
                                                            <th>Price(RM)</th>
                                                            <th>Quantity</th>
                                                            <th>Trigger</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    @php
                                                        $count = 0;
                                                    @endphp
                                                    <tbody>
                                                        @foreach ($sku as $skus)
                                                            @php
                                                                $count++;
                                                            @endphp
                                                            <tr>
                                                                <td>{{ $count }}</td>
                                                                <td>{{ $skus->Category }}</td>
                                                                <td>{{ $skus->SKUname }}</td>
                                                                <td>{{ $skus->Price }}</td>
                                                                <td>{{ $skus->Quantity }}</td>
                                                                <td>{{ $skus->Trigger }}</td>
                                                                <td>
                                                                    <button class="btn btn-primary editbtn" tpe="button"
                                                                        title="Edit" value="{{ $skus->sku_id }}">Edit
                                                                    </button>
                                                                    <a href="{{route('deletesku',['id' => $skus->sku_id])}}" class="btn btn-danger"
                                                                        title="Delete">Delete
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </form>
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
@section('skujs')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.editbtn', function() {
                $('#categorys').select2();
                var sku_id = $(this).val();
                // alert(sku_id);
                $('#editmodal').modal('show');

                $.ajax({
                    type: "GET",
                    url: "/editsku/" + sku_id,
                    success: function(response) {
                        console.log(response);
                        $('#sku_id').val(response.sku.sku_id);
                        // $('#Category').val(response.sku.Category);
                        假设 response.sku.Category 的值为 "option2"
                        $('#SKUname').val(response.sku.SKUname);
                        $('#Price').val(response.sku.Price);
                        $('#Quantity').val(response.sku.Quantity);
                        $('#Trigger').val(response.sku.Trigger);

                    }
                });
            })
        });
    </script>
@endsection
