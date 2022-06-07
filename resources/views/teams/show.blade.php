@extends('layout.app')

@section('title', $team->name)

@section('content')
    <h1 style="text-transform: capitalize">{{ $team->name }}</h1>

    <div class="container">
        <div class="row">
            <div class="col-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        <h4 style="text-transform: capitalize"><b>Team name: </b>{{ $team->name }}</h4>
                    </div>
                    <div class="card-body">
                        <p><b>Email: </b>{{ $team->email }}</p>
                        <p style="text-transform: capitalize"><b>Address: </b>{{ $team->address }}</p>
                        <p style="text-transform: capitalize"><b>City: </b>{{ $team->city }}</p>
                    </div>
                    <div class="card-footer">
                        <ul class="list-group">
                            <h4><b style="text-transform: capitalize">{{ $team->name }}</b> <small>all players:</small></h4>
                            @foreach ($team->players as $player)
                            <li class="list-group-item">
                                <a href="/players/{{ $player->id }}" class="nav-link bg-success p-2" style="color: #fff; border-radius: 5px; text-transform: capitalize">
                                    {{ $player->first_name }} {{ $player->last_name }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 