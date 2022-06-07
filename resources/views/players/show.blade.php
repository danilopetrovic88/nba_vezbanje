@extends('layout.app')

@section('title', $player->first_name, $player->last_name)

@section('content')
    <h1>{{ $player->first_name }} {{ $player->last_name }}</h1>

    <div class="container">
        <div class="row">
            <div class="col-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        <h4 style="text-transform: capitalize"><b>Player name: </b>{{ $player->first_name }} {{ $player->last_name }}</h4>
                    </div>
                    <div class="card-body">
                        <p><b>Email: </b>{{ $player->email }}</p>
                    </div>
                    <div class="card-footer">
                        <p><b>Team: </b>
                            <a href="/teams/{{ $player->team->id }}" class="nav-link bg-success p-2" style="color: #fff; border-radius: 5px;">
                                {{ $player->team->name }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 