@extends('layouts.master')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin Profile</div>

                    <div class="card-body">
                        <!-- Admin Info -->
                        <h5 class="card-title">Personal Information</h5>
                        <p class="card-text">Name: {{ $user }}</p>
                        <p class="card-text">Email: {{ $email }}</p>

                        <!-- Admin Profile Picture -->
                        <div class="mb-3">
                            <img src="{{ asset('img/Jaki.jpeg') }}" alt="Profile Picture"
                                class="img-thumbnail rounded-circle" width="30%" height="30%">
                        </div>

                        <!-- Update Profile Form -->
                        <form>
                            <!-- Name -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" value="{{ $user }}"
                                    required>
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" value="{{ $email }}"
                                    required>
                            </div>

                            <!-- Profile Picture Upload -->
                            <div class="mb-3">
                                <label for="profilePicture" class="form-label">Profile Picture</label>
                                <input type="file" class="form-control" id="profilePicture">
                            </div>

                            <button type="submit" class="btn btn-primary">Update Profile</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
