@extends('layouts/admin')

@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">Add a New League</h1>
        </div>
    </div>

    <div class="row">
        <form action="{{ route('leagues.store') }}" method="post">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="league_name" class="form-label">League Name</label>
                <input type="text" class="form-control" id="league_name" name="league_name" aria-describedby="league_name">
            </div>
            <div class="mb-3">
                <label for="country" class="form-label">Country</label>
                <input type="text" class="form-control" id="country" name="country" aria-describedby="country">
            </div>
            <div class="mb-3">
                <label for="season" class="form-label">Season</label>
                <input type="text" class="form-control" id="season" name="season" aria-describedby="season">
            </div>
            <div class="mb-3">
                <label for="start_date" class="form-label">Start Date</label>
                <input type="date" class="form-control" id="start_date" name="start_date" aria-describedby="start_date">
            </div>
            <div class="mb-3">
                <label for="end_date" class="form-label">End Date</label>
                <input type="date" class="form-control" id="end_date" name="end_date" aria-describedby="end_date">
            </div>
            <div class="mb-3">
                <label for="leagueURL" class="form-label">League image URL</label>
                <input type="text" class="form-control" id="leagueURL" name="leagueURL" aria-describedby="leagueURL">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
