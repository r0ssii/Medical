@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You have admin right on this website!
                    <br />
                    <br />
                    <div class="float-left">
                        <a href="{{ route('admin.doctors.index') }}" class="btn btn-primary">Doctors</a>
                        <a href="{{ route('admin.patients.index') }}" class="btn btn-secondary">Patients</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
