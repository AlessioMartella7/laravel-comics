@extends('layouts.app')

@section('page-title', 'Monsters')

@section('main-content')

    <div class="container my-3 py-3">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center fw-bold text-danger">Famous Monsters</h1>
            </div>

            @foreach ($monsters as $index => $monster)
                <div class="col-3 py-4">

                    <a href="{{ route('pages-show', $index) }}">
                        <div class="card h-100 pb-0 bg-black rounded p-1">
                            <img class="card-img-top h-50 img-fluid rounded " src="{{ $monster['image'] }}"
                                alt="{{ $monster['name'] }}">
                            <div class="card-body bg-dark text-white rounded my-1">
                                <p class="card-text fw-bold fs-5">Name: {{ $monster['name'] }}</p>
                                <p class="card-text fw-bold fs-5">Height: {{ $monster['height'] }}</p>
                                <p class="card-text fw-bold fs-5">Weight: {{ $monster['weight'] }}</p>
                                <p class="card-text fw-bold fs-5">Victims: {{ $monster['victims'] }}</p>
                                <p class="card-text fw-bold fs-5">Hometown: {{ $monster['hometown'] }}</p>
                                <p class="card-text fw-bold fs-5">In Activity: {{ $monster['active'] ? 'Yes' : 'No' }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection
