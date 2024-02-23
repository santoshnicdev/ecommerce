@extends('master')
@section('content')

<div class="container  bc">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <form class="login-form" action="/login" method="POST">
                @csrf
                    <h2 class="text-center">Login</h2>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection