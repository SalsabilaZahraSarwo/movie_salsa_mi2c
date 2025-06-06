@extends('layouts.template')

@section('content')
<div class="container mt-4 mb-5">
    <div class="row">
        <div class="col-md-5">
            <img src="{{ asset('storage/'.$movie->cover_image) }}" class="img-fluid rounded-start" alt="...">
                    </div>
        <div class="col-md-7">
            <h3>{{ $movie->title }}</h3>
            <p> <br>Sypnopsis: <br> {{ $movie->synopsis }}</p>

            @if (!empty($movie->actors))
                <p><strong>Actors:</strong> {{ $movie->actors }}</p>
            @endif

            @if (!empty($movie->category))
                <p><strong>Category:</strong> {{ $movie->category->category_name }}</p>
            @endif

            @if (!empty($movie->year))
                <p><strong>Year:</strong> {{ $movie->year }}</p>
            @endif
            <a href="{{ route('homepage') }}" class="btn btn-success mt-3">Back</a>
        </div>
    </div>
</div>
@endsection