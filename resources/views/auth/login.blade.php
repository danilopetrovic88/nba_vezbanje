@extends('layout.app')

@section('title', 'Login')

@section('content')
    <h1>Login</h1>

    
    <div class="container">
        <div class="row">
            <div class="col-10 offset-1">
                <form action="/login" method="POST">
                    @csrf
                    <input type="email" name="email" placeholder="email" class="form-control"><br>
                    <input type="password" name="password" placeholder="password" class="form-control"><br>
                    <button type="submit" class="btn btn-warning form-control">Login</button>
                </form>
            </div>
        </div>
    </div>
@endsection