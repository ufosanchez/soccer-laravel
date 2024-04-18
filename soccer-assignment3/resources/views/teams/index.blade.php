@extends('layouts/admin')

@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">View all Teams</h1>
        </div>
    </div>

    <div class="row">
        @foreach($teams as $team)
                <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 border border-dark custom-card">
                    <img src="{{ $team->teamLogo }}" class="card-img-top" alt="team image">
                        <div class="card-body">
                            <h5 class="card-title custom-card-title">{{ $team->team_name }}</h5>
                            <p class="mb-1"><strong>League:</strong> <span class="join_sql_data"> {{ $team->league_name }}</span></p>
                            <p class="mb-1"><strong>Foundation Date:</strong> {{ $team->foundation_date }}</p>
                            <p class="mb-1"><strong>Country:</strong> {{ $team->country }}</p>
                            <p class="mb-1"><strong>Stadium Name:</strong> {{ $team->stadium_name }}</p>
                        </div>
                    </div>
                </div>
        @endforeach
    </div>
@endsection