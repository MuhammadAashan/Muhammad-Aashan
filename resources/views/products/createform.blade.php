@extends('products.index')
@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row ">
            <div class="col-12 ml-auto">
                <div class="row align-items-center mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-title text-center mt-3">
                                <h3>Add Product</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{url('products/store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Product Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Enter Product Name">
                                    @if($errors->has('name'))
                                            <div class="error text-danger">{{ $errors->first('name') }}</div>
                                    @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="desc">Product Description</label>
                                        <textarea type="text" class="form-control" id="description" name="description" placeholder="Enter Product Detail"></textarea>
                                    @if($errors->has('description'))
                                        <div class="error text-danger">{{ $errors->first('description') }}</div>
                                    @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input type="text" class="form-control" id="price" name="price"
                                            placeholder="Enter Product Price">
                                        @if($errors->has('price'))
                                            <div class="error text-danger">{{ $errors->first('price') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Quantity</label>
                                        <input type="text" class="form-control" id="quantity" name="quantity"
                                            placeholder="Enter Product Quantity">
                                        @if($errors->has('quantity'))
                                            <div class="error text-danger">{{ $errors->first('quantity') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="productimage">Product Image</label>
                                        <input type="file" id="productimage" name="productimage">
                                        @if($errors->has('productimage'))
                                        <div class="error text-danger">{{ $errors->first('productimage') }}</div>
                                        @endif
                                    </div>

                                    <button class="btn btn-dark mt-5 mx-auto d-block" type="submit">Add
                                        Product</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
