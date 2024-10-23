@extends('layouts.app')

@section('page-title', 'Monsters')

@section('main-content')

    <div class="container my-3 py-3">
        <div class="row justify-content-center">
            <div class="col-3">
                <h1 class="text-center fw-bold text-danger">{{ $monster['name'] }}</h1>
            </div>
            <div class="col-12 d-flex justify-content-center py-4">
                <div class="card h-100 pb-0 bg-black rounded p-1" style="width: 18rem;">
                    <img class="card-img-top height-md  rounded " src="{{ $monster['image'] }}" alt="{{ $monster['name'] }}">
                    <div class="card-body bg-dark text-white rounded my-1">
                        <p class="card-text fw-bold fs-5">Name: {{ $monster['name'] }}</p>
                        <p class="card-text fw-bold fs-5">Height: {{ $monster['height'] }}</p>
                        <p class="card-text fw-bold fs-5">Weight: {{ $monster['weight'] }}</p>
                        <p class="card-text fw-bold fs-5">Victims: {{ $monster['victims'] }}</p>
                        <p class="card-text fw-bold fs-5">Hometown: {{ $monster['hometown'] }}</p>
                        <p class="card-text fw-bold fs-5">In Activity: {{ $monster['active'] ? 'Yes' : 'No' }}</p>
                    </div>
                </div>
            </div>
            {{-- back button --}}
            <div class="col-12 text-center">
                <a href="{{ route('famous-monsters') }}">
                    <button class="btn btn-danger text-dark fs-4 fw-bold px-3">Back</button>
                </a>
            </div>
        </div>
    </div>

@endsection
