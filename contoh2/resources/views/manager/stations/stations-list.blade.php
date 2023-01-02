@extends('layouts.headerManager')
@section('content') 
@include('manager.message')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
            <!-- <span class="pull-center">
            <a href="#" data-toggle="modal" data-target="#addStation" 
            data-toggle="tooltip" type="button" class="btn btn-sm btn-primary">
            <i class="glyphicon glyphicon-plus"></i> Add New Region</a>
            </span> -->
            <!-- <br>
            <br> -->
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Region List</h4>
                  <h4 class="card-title pull-right">Today is: {{ date('d-m-Y', time()) }}</h4>
                  <p class="card-category"> These are all the stations for the routes.</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  @if (count($stations) > 0 ) 
                    <table class="col-md-12">
                      <thead class="text-primary">
                      <th>ID</th>
                    <th>Region Name</th>
                    <th>Region Type</th>
                    <th>Last Updated</th>
                    <!-- <th>Action</th> -->
                    </thead>
                    <tbody>
                    @foreach ( $stations as $key => $station )
                      <tr>
                        <td>{{ ++$key }}</td>
                        <td>
                          <a data-toggle="modal" data-target="#exampleModalCenterviewOperator
                            {{$station->id}}"data-toggle="tooltip">{{ $station->name }}</a></td>
                        <td>{{ $station->jenis_area }}</td>
                        <td>{{ $station->updated_at }}</td>
                        
                      </tr>
                    @endforeach
                </tbody>
              </table>
              @endif 
                 </div>
                </div>
                {!! $stations->render() !!}
              </div>
            </div>
            </div>
            </div>
            </div>

@endsection