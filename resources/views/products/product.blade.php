@extends('products.index')
@section('content')

    <div class="page-breadcrumb">
        <div class="row ">
            <div class="col-6 mb-2  align-items-center">
                <h4 class="page-title">Product list</h4>
            </div>

            <div class="col-6 mb-2 text-right">
                <a class="btn btn-primary" href="{{ url('products/add') }}"><i class="fas fa-plus"></i></a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row ">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-hover table-light text-center">
                                <thead class="thead-dark ">
                                    <tr>
                                        <th>ID</th>
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
                                    @foreach ($products as $cd)
                                        <tbody>

                                            <td>{{ $cd->id }}</td>
                                            <td><img src="{{ asset('storage/' . $cd->image) }}" alt="image"
                                                    width="100px" /></td>
                                            <td>{{ $cd->name }}</td>
                                            <td>{{ $cd->description }}</td>
                                            <td>{{ $cd->quantity }}</td>
                                            <td>{{ $cd->price }}</td>
                                            <td>
                                                <div class="row text-center">
                                                    <div class="col-5">
                                                        <!-- Edit button -->
                                                        <a href="{{url("products/edit/$cd->id")}}" class="btn btn-primary m-1"><i class=" far fa-edit"></i></a>
                                                    </div>
                                                    <div class="col-5 offset-1">
                                                        <!-- Delete button -->
                                                        <button type="button" class="btn btn-danger m-1"
                                                            data-toggle="modal"
                                                            data-target="#demoModal{{ $cd->id }}"><i class=" far fa-trash-alt"></i></button>
                                                    </div>
                                                </div>


                                            </td>

                                            <!-- Delete Modal -->
                                            <form action="{{ url('/products/' . $cd->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <div class="modal fade" tabindex="-1" role="dialog"
                                                    id="demoModal{{ $cd->id }}">
                                                    <!-- Unique ID based on product ID -->
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Warning!</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Are you sure you want to delete this Product?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary">Yes</button>
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">No</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
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

@endsection
