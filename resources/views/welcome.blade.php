
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome</div>

                <div class="card-body">

                    Welcome to the medical center! <a href="{{ route('admin.doctor.index') }}">Doctors</a>

                  <br/>
                learn more  <a href="{{ route('about') }}">About Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
