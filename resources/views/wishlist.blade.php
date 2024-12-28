@extends('layouts.app')

@section('title', 'Wishlist')

@section('content')
<div class="container my-4">
    <h2 class="text-center">Your Wishlist</h2>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    <div class="row row-cols-2 row-cols-md-4 g-3">
    @forelse($wishlists as $wishlist)
    <div class="col">
        <div class="position-relative text-center text-white overflow-hidden">
            <a href="{{ route('product.details', $wishlist->product->id) }}">
                <img class="card-img-top" src="{{ $wishlist->product->image }}" alt="{{ $wishlist->product->name }}">
            </a>
            <div class="position-absolute bottom-0 w-100 bg-dark bg-opacity-50 py-2 fs-5" style="z-index: 2;">
                <span>{{ $wishlist->product->name }}</span>
                <form action="{{ route('wishlist.destroy', $wishlist->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-link text-danger float-end me-2 p-0" aria-label="Remove from Wishlist">
                        <i class="bi bi-trash"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
        @empty
            <div class="col-12 text-center">
                <p>Your wishlist is empty</p>
            </div>
        @endforelse
    </div>
</div>
@endsection