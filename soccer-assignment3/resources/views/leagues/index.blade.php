@extends('layouts/admin')

@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">View all Leagues</h1>
            <h3>Click on each of the leagues to go to the details of them!</h3>
            <a href="/leagues/create" class="btn btn-success mb-2">Create a new League!</a>
        </div>
    </div>

    <div class="row">
        @foreach($leagues as $league)
            <div class="col-lg-3 col-md-4  col-sm-6 px-3 mb-3">
                <div class="card h-100 border border-dark custom-card">
                    <a href="/leagues/{{ $league->id }}" class="text-reset text-decoration-none">
                        <img src="{{ $league->leagueURL }}" class="card-img-top" alt="league image">
                        <div class="card-body">
                            <h5 class="card-title custom-card-title">{{ $league->league_name }}</h5>
                            <p class="mb-2"><strong>Country:</strong> {{ $league->country }}</p>
                            <p class="mb-2"><strong>Season:</strong> {{ $league->season }}</p>
                            <p class="mb-2"><strong>Start Date:</strong> {{ $league->start_date }}</p>
                            <p class="mb-2"><strong>End Date:</strong> {{ $league->end_date }}</p>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
