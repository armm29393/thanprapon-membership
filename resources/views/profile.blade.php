@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Profile</div>
                    <form action="{{ url('/profile') }}" method="post">
                        @csrf
                        <div class="card-body">
                            @include('layouts.alert')
                            <div class="row">
                                <div class="col-md-6 pt-2">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" name="name" id="name" value="{{ \Illuminate\Support\Facades\Auth::user()->name }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6 pt-2">
                                    <div class="form-group">
                                        <label for="email">Username</label>
                                        <input type="text" class="form-control" name="email" id="email" value="{{ \Illuminate\Support\Facades\Auth::user()->email }}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 pt-2">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" name="password" id="password" required>
                                    </div>
                                </div>
                                <div class="col-md-6 pt-2">
                                    <div class="form-group">
                                        <label for="password_confirmation">Confirm Password</label>
                                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required>
                                    </div>
                                </div>
                            </div>

                            <br />
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary" style="width: 100%">Edit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
