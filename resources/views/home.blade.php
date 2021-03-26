@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Products') }}</div>

                <div class="card-body">
                    <a href="/add" class="btn btn-success mb-2">Add New</a>
                    @if (count($product) > 0)
                        @foreach ($product as $prodList)
                        <div class="card" style="width:400px">
                            <img class="card-img-top" src="{{ $prodList->photo }}" alt="Card image">
                            <div class="card-body">
                                <p class="card-text"><span class="font-weight-bold">Product Name:</span> {{ $prodList->product_name }}</p>
                                <p class="card-text"><span class="font-weight-bold">Description: </span>{{ $prodList->description }}</p>
                                <p class="card-text"><span class="font-weight-bold">Quantity: </span>{{ $prodList->quantity }}</p>
                                <p class="card-text"><span class="font-weight-bold">Price: </span>{{ $prodList->price }}</p>
                                <p class="card-text"><span class="font-weight-bold">Uploaded By: </span>{{ $prodList->uploaded_by }}</p>
                            </div>
                        </div>
                        <br>
                        @endforeach
                    @else
                        <p>No data found!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection