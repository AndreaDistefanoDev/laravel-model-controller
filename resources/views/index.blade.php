@extends('layout.master')

@section('title-page', 'I miei film su Laravel')

@section('content')
    <div class="container my-5 bg-light">

        <h2 class="text-dark mb-4 border-start border-warning border-4 ps-3 fw-bold">
            Il mio Catalogo Film
        </h2>


        <div class="row g-4">

            @foreach ($movies as $movie)
                <x-card :movie="$movie" />
            @endforeach

        </div>

    </div>
@endsection
