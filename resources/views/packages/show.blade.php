@extends('layouts.app')

@section('content')
    <div class="p-5">
        <div class="container">
            <h1 class="display-3">{{ $package->title }}</h1>
            <hr class="my-2">
        </div>
    </div>
    <div class="container">
        <h5 class="text-center p-4">{{$package->description}}</h5>
        <div class="row">
            <div class="col-6 m-auto">
                <div class="package">
                    <div class="card border-primary">
                        <img src="{{ $package->image }}" alt="Title">
                        <div class="card-body">
                            <h4 class="card-title">{{ $package->location }}</h4>
                            <h5 class="card-text">{{ $package->price }} €</h5>
                            <address>Hotel: {{$package->accomodation}}</address>
                            <p>Number of people: {{$package->people}}</p>
                            <p>Departure: {{$package->departure_date}}</p>
                            <p>Return: {{$package->return_date}}</p>
                            <h6>Flight: {{$package->flight}}</h6>
                            <h6>Car Rent: {{$package->car_rent}}</h6>
                            <button type="button" class="btn btn-primary text-center mt-3">Apply</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
