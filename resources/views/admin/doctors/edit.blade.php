@extends('layouts.app');
# @Date:   2019-11-04T18:15:24+00:00
# @Last modified time: 2019-11-04T20:13:54+00:00




@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
            Edit Patient
          </div>
          <div class="card-body">
            @if  ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{$error}}</li>
                @endforeach
              </ul>
            </div>
            @endif
            <form method="POST" action="{{route('admin.doctor.update', $doctor->id)}}">
              <input type="hidden" name="_method" value="PUT">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{old('Name', $doctor->name)}}" />
              </div>
              <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{old('address', $doctor->address)}}" />
              </div>
              <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{old('phone', $doctor->phone)}}" />
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{old('email', $doctor->email)}}" />
              </div>
              <div class="form-group">
                <label for="insurance">Start Date</label>
                <input type="text" class="form-control" id="insurance" name="StartDate" value="{{old('insurance', $doctor->startDate)}}" />
              </div>
              <a href="{{route('admin.doctor.index')}}" class="btn btn-link">Cancel</a>
              <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
