@extends('layout.app')

@section('title', 'Teams')

@section('content')
    <h1>Teams</h1>

    
    <div class="container">
        <ul class="list-group">
            @foreach ($teams as $team)
                <li class="list-group-item bg-success p-2 mb-2" style="border-radius: 5px;">
                    <a href="/teams/{{ $team->id }}" class="nav-link" style="color: #fff; text-transform: capitalize;">{{ $team->id }}. {{ $team->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection