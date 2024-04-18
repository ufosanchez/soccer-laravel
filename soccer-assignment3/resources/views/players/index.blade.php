@extends('layouts/admin')

@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">View all Players</h1>
        </div>
    </div>

    <div class="row">
        @foreach($players as $player)
                <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 border border-dark custom-card">
                        <img src="{{ $player->imageURL }}" class="card-img-top" alt="player image">
                        <div class="card-body">
                            <h5 class="card-title custom-card-title">{{ $player->fname }} {{ $player->lname }}</h5>
                            <p class="mb-1"><strong>Age:</strong> {{ $player->age }}</p>
                            <p class="mb-1"><strong>Shirt #:</strong> {{ $player->shirt_number }}</p>
                            <p class="mb-1"><strong>Country:</strong> {{ $player->country }}</p>
                            <p class="mb-1"><strong>Team:</strong> {{ $player->team_name }}</p>
                            <div class="team-league">
                                <img src="{{ $player->teamLogo }}" class="card-img-top" alt="team image">
                                <img src="{{ $player->leagueURL }}" class="card-img-top" alt="league image">
                            </div>
                        </div>
                    </div>
                </div>
        @endforeach
    </div>
@endsection