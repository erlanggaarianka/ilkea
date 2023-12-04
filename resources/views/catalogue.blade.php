@extends('layouts.app')

@section('content')
<div class="container">
    <div class="mb-4">
        <a href="{{ route('furniture.create') }}" class="btn btn-success">Add New Furniture</a>
    </div>

    <div class="row">
        @foreach ($furnitures as $furniture)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ $furniture->image ?? asset('placeholder-image.jpg') }}" class="card-img-top" alt="{{ $furniture->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $furniture->name }}</h5>
                        <p class="card-text">{{ $furniture->description }}</p>
                        <p class="card-text">Price: ${{ $furniture->price }}</p>
                        <p class="card-text">Type: {{ ucfirst($furniture->type) }}</p>
                        <a href="{{ route('furniture.show', $furniture->id) }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
