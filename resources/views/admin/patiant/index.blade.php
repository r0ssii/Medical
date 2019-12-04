@extends('layouts.app');
# @Date:   2019-11-04T18:46:42+00:00
# @Last modified time: 2019-11-04T19:15:11+00:00




@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            Patient
            <a href="{{route('admin.patiants.create')}}" class="btn btn-primary float-right">Add</a>
          </div>
          <div class="card-body">
            @if (count($patiants) === 0)
              <p> There are no patients</p>
            @else
              <table id="table-patiant" class="table table-hover">
                <thead>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>Insurance</th>

                  <th>Actions</th>
                </thead>
                <tbody>
                  @foreach ($patiants as $patiant)
                    <tr data-id="{{$patiant->id}}">
                      <td>{{$patiant->name}}</td>
                      <td>{{$patiant->address}}</td>
                      <td>{{$patiant->phone}}</td>
                      <td>{{$patiant->email}}</td>
                      <td>{{$patiant->insurance}}</td>

                      <td>
                        <a href="{{route('admin.patiant.show', $patiant->id)}}" class="btn btn-default">View</a>
                        <a href="{{route('admin.patiant.edit', $patiant->id)}}" class="btn btn-warning">Edit</a>
                        <form style="display:inline-block" method="POST" action="{{route('admin.patiant.destroy', $patiant->id)}}">
                          <input type="hidden" name="_method" value="DELETE">
                          <input type="hidden" name="_token" value="{{csrf_token()}}">
                          <button type="submit" class="form-control btn btn-danger"> Delete</a>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
