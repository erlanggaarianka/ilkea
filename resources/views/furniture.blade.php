<!-- resources/views/furniture/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <img src="{{ $furniture->image ?? asset('placeholder-image.jpg') }}" class="card-img-top" alt="{{ $furniture->name }}">
        <div class="card-body">
            <h5 class="card-title">{{ $furniture->name }}</h5>
            <p class="card-text">{{ $furniture->description }}</p>
            <p class="card-text">Price: ${{ $furniture->price }}</p>
            <p class="card-text">Type: {{ ucfirst($furniture->type) }}</p>
            <a href="{{ route('home') }}" class="btn btn-primary">Back to Catalogue</a>

            <!-- Delete Button Triggering Modal -->
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal">
                Delete Furniture
            </button>

            <!-- Delete Furniture Modal -->
            <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="confirmDeleteModalLabel">Confirm Deletion</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to delete this furniture?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <form action="{{ route('furniture.destroy', $furniture->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
