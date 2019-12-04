@extends('layouts.app');
# @Date:   2019-11-04T19:48:33+00:00
# @Last modified time: 2019-11-04T19:56:15+00:00




@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
            Patient: {{$patiant->title}}
          </div>
          <div class="card-body">
              <table class="table table-hover">
                <tbody>
                  <tr>
                    <td>Name</td>
                    <td>{{$patiant->name}}</td>
                  </tr>
                  <tr>
                    <td>Address</td>
                    <td>{{$patiant->address}}</td>
                  </tr>
                  <tr>
                    <td>Phone</td>
                    <td>{{$patiant->phone}}</td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td>{{$patiant->email}}</td>
                  </tr>
                  <tr>
                    <td>Insurance</td>
                    <td>{{$patiant->insurance}}</td>
                  </tr>
                </tbody>
              </table>
              <a href="{{route('admin.patiant.index')}}" class="btn btn-default">Back</a>
              <a href="{{route('admin.patiant.edit', $patiant->id)}}" class="btn btn-warning">Edit</a>
              <form style="display:inline-block" method="POST" action="{{route('admin.patiant.destroy', $patiant->id)}}">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <button type="submit" class="form-control btn btn-danger"> Delete</a>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
