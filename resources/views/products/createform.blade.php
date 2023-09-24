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
                                <form action="/store" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Product Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Enter Product Name">
                                        <div class="invalid-feedback">Product Name Can't Be Empty</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="desc">Product Description</label>
                                        <textarea type="text" class="form-control" id="description" name="description" placeholder="Enter Product Detail"></textarea>
                                        <div class="invalid-feedback">Product Description Can't Be Empty</div>
                                    </div>

                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input type="text" class="form-control" id="price" name="price"
                                            placeholder="Enter Product Price">
                                        <div class="invalid-feedback">Product Price Can't Be Empty</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Quantity</label>
                                        <input type="text" class="form-control" id="quantity" name="quantity"
                                            placeholder="Enter Product Quantity">
                                        <div class="invalid-feedback">Product Price Can't Be Empty</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="productimage">Product Image</label>
                                        <input type="file" id="productimage" name="productimage">
                                        <div class="invalid-feedback">File Format Not Supported</div>
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
