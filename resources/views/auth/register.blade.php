@extends('layout.app')

@section('title', 'Register')

@section('content')
    <h1>Register</h1>

    
    <div class="container">
        <div class="row">
            <div class="col-10 offset-1">
                <form action="/register" method="POST">
                    @csrf
                    <input type="text" name="name" placeholder="name" class="form-control"><br>
                    <input type="email" name="email" placeholder="email" class="form-control"><br>
                    <input type="password" name="password" placeholder="password" class="form-control"><br>
                    <input type="password" name="password_confirmation" placeholder="Confirm password" class="form-control"><br>
                    <button type="submit" class="btn btn-success form-control">Register</button>
                </form>
            </div>
        </div>
    </div>
@endsection