@extends('layouts/welcome')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Login</div>

                <div class="card-body">
                    <!-- Your login form goes here -->

                    <input type="text" placeholder="Email" name="email">
                    <input type="password" placeholder="Password" name="password">
                    <a href="/dashboard" class="btn btn-primary">
                        Login
                    </a>
                    <br>
                    <a href="/register">Belum punya akun</a>
                </div>
            </div>
        </div>
    </div>
@endsection
