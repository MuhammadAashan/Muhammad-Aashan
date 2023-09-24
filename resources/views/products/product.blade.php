@extends('products.index')
@section('content')

<div class="page-breadcrumb">
    <div class="row ">
        <div class="col-6 mb-2  align-items-center">
            <h4 class="page-title">Product list</h4>
        </div>

        <div class="col-6 mb-2 text-right">
            <a class="btn btn-primary" href="{{ url('/add') }}"><i class="fas fa-plus"></i></a>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row ">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-md-5">
                        <form method="GET" action="{{ url('seller/product') }}">
                            <div class="input-group  bg-dark p-1">
                                <input type="text" id="search" name="search" placeholder="Type & Enter"
                                    value="{{ Session::get('search') }}" class="form-control ">
                                <div class="input-group-append">
                                    <button class="input-group-text bg-light" id="basic-addon4"><i
                                            class=" fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-hover table-light">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Product_Id</th>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Product Description</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @if ($products->isEmpty())
                            <p>No products available.</p>
                        @else
                            @foreach ($products as $cd )
                            <tbody>

                                <td>{{$cd->id}}</td>
                                <td><img src="{{ asset('storage/' . $cd->image) }}" alt="image"
                                    width="100px" /></td>
                                <td>{{$cd->name}}</td>
                                <td>{{$cd->description}}</td>
                                <td>{{$cd->quantity}}</td>
                                <td>{{$cd->price}}</td>
                                <td></td>



                            </tbody>
                            @endforeach

                            @endif
                        </table>
                        {{ $products->onEachSide(5)->links() }} {{-- Display pagination links --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal -->
<form action="/delete" method="post">
    @csrf
    <div class="modal" tabindex="-1" role="dialog" id="demoModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Warning!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this Product?</p>
                    <div class="form-group">
                        <input type="hidden" class="form-control catid" name="catidp" id="catidp">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Yes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
