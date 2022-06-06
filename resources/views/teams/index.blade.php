@extends('layout.app')

@section('title', 'Teams')

@section('content')
    <h1>Teams</h1>

    
    <div class="container">
        <ul class="list-group">
            @foreach ($teams as $team)
                <li class="list-group-item">
                    <a href="/teams/{{ $team->id }}" class="nav-link">{{ $team->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection