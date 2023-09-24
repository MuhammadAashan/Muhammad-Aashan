@extends('products.index')
@section('content')
    <div class="container-fluid">
        <div class="row">
            @if ($products->isEmpty())
                <p>No products available.</p>
            @else
                @foreach ($products as $cd)
                    <div class="col-md-3 col-sm-12 mb-3 ">
                        <div class="card card h-100 d-flex flex-column">
                            <img src="{{ asset('storage/' . $cd->image) }}" class="card-img-top p-2" width="90%"
                                alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">{{ $cd->name }}</h5>
                                <p class="card-text">{{ $cd->description }}</p>
                                <p class="card-text">Quantity: {{ $cd->quantity }}</p>
                                <p class="card-text">Price: Rs.{{ $cd->price }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
