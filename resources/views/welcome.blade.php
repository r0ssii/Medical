@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>Welcome to Adams Medical Centre. This is the home page.</b></div>

                <div class="card-body">
                Primary Information:</a>
                    <br />
                    <br />
                    <div class="float-left">
                        <a class="btn btn-primary" href={{ route('login')}}>Login</a>
                        <a class="btn btn-info" href={{ route('register')}}>Register</a>
                        <a class="btn btn-warning" href={{ route('about') }}>About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
