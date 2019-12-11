@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome</div>

                <div class="card-body">
                  Medical Centre</a>
                    <br />
                    <br />
                    <div class="float-right">
                        <a class="btn btn-primary" href={{ route('login')}}>Login</a>
                        <a class="btn btn-secondary" href={{ route('about') }}>Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
