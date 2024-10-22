@extends('layouts.app')

@section('page-title', 'Monsters')

@section('main-content')

    <div class="container my-3 py-3">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center fw-bold text-danger">Famous Monsters</h1>
            </div>

            @foreach ($monsters as $monster)
                <div class="col-4 py-2">

                    <ul>
                        <li>
                            <img class="img-fluid" src="{{ $monster['image'] }}" alt="{{ $monster['name'] }}">
                        </li>
                        <li>
                            <p class="fw-bold fs-5">Name: {{ $monster['name'] }}</p>
                        </li>
                        <li>
                            <p class="fw-bold fs-5">Height: {{ $monster['height'] }}</p>
                        </li>
                        <li>
                            <p class="fw-bold fs-5">Weight: {{ $monster['weight'] }}</p>
                        </li>
                        <li>
                            <p class="fw-bold fs-5">Victims: {{ $monster['victims'] }}</p>
                        </li>
                        <li>
                            <p class="fw-bold fs-5">Hometown: {{ $monster['hometown'] }}</p>
                        </li>
                        <li>
                            <p class="fw-bold fs-5">In Activity: {{ $monster['active'] ? 'Yes' : 'No' }}</p>
                        </li>
                    </ul>
                </div>
            @endforeach
        </div>
    </div>

@endsection
