@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="p-5">
            <div class="container">
                <h1 class="display-3">Travel Packages</h1>
                <p class="lead">Choose your package</p>
                <hr class="my-2">
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 gy-3">
            @forelse ($packages as $package)
                <div class="col">
                    <a href="{{route('packages.show', $package)}}" class="text-decoration-none">
                        <div class="card border-primary">
                            <img src="{{ $package->image }}" alt="Title">
                            <div class="card-body">
                                <h4 class="card-title">{{ $package->title }}</h4>
                                <p class="card-text">{{ $package->description }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <h3>Nothing to show yet!</h3>
            @endforelse
        </div>
    </div>
@endsection
