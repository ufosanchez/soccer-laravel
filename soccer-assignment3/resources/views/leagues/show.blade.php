@extends('layouts/admin')

@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">League Info</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
            <img src="{{ $league->leagueURL }}" class="card-img-top" alt="league image">
                <div class="card-body">
                    <h5 class="card-title custom-card-title">{{ $league->league_name }}</h5>
                    <p class="mb-2"><strong>Country:</strong> {{ $league->country }}</p>
                    <p class="mb-2"><strong>Season:</strong> {{ $league->season }}</p>
                    <p class="mb-2"><strong>Start Date:</strong> {{ $league->start_date }}</p>
                    <p class="mb-2"><strong>End Date:</strong> {{ $league->end_date }}</p>
                    <a href="{{ route('leagues.edit', $league->id) }}" class="card-link fw-bold">Edit</a>
                    <a href="{{ route('leagues.trash', $league->id) }}" class="card-link fw-bold text-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>
@endsection
