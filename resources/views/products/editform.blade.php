@extends('products.index')
@section('content')

<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 ml-auto">
            <div class="row align-items-center mb-5">
                <div class="col-12">
                    <div class="card">
                        <div class="card-title text-center mt-3">
                            <h3>Edit Product</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('/products/' . $products->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name">Product Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Enter Product Name" value="{{ $products->name }}">
                                    <div class="invalid-feedback">Product Name Can't Be Empty</div>
                                </div>
                                <div class="form-group">
                                    <label for="desc">Product Description</label>
                                    <textarea type="text" class="form-control" id="description" name="description"
                                        placeholder="Enter Product Detail">{{$products->description }}</textarea>
                                    <div class="invalid-feedback">Product Description Can't Be Empty</div>
                                </div>

                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control" id="price" name="price"
                                        placeholder="Enter Product Price" value="{{ $products->price }}">
                                    <div class="invalid-feedback">Product Price Can't Be Empty</div>
                                </div>
                                <div class="form-group">
                                    <label for="quantity">Quantity</label>
                                    <input type="text" class="form-control" id="quantity" name="quantity"
                                        placeholder="Enter Product Quantity" value="{{ $products->quantity }}">
                                    <div class="invalid-feedback">Product Quantity Can't Be Empty</div>
                                </div>
                                <button class="btn btn-dark mt-5 mx-auto d-block" type="submit">Update
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
