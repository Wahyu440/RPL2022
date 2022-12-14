@extends('layouts.headerManager')
@section('content') 
@include('manager.message')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
            <!-- <span class="pull-center">
            <a href="#" data-toggle="modal" data-target="#addBus" 
            data-toggle="tooltip" type="button" class="btn btn-sm btn-primary">
            <i class="glyphicon glyphicon-plus"></i> Add New Bus</a>
            </span>
            <br>
            <br> -->
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Bus List</h4>
                  <h4 class="card-title pull-right">Today is: {{ date('d-m-Y', time()) }}</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  @if (count($buses) > 0 ) 
                    <table class="col-md-12">
                      <thead class="text-primary">
                      <th>ID</th>
                    <th>Bus Name</th>
                    <th>Plat Number</th>
                    <th>Machine Number</th>
                    <th>Total Seats</th>
                    <th>Last Updated</th>
                    <th>Status</th>
                    <th>Pabrik</th>
                    <th>Jenis</th>
                    <!-- <th>Action</th> -->
                    </thead>
                    <tbody>
                    @foreach ( $buses as $key => $bus )
                      <tr>
                        <td>{{ ++$key }}</td>
                        <td>
                        <!-- <img style="heigth:20px; width:20px; background-color:powderblue;" src="/storage/bus_images/{{$bus->bus_image}}"> -->
                          <a data-toggle="modal" data-target="#exampleModalCenterviewOperator
                            {{$bus->bus_id}}"data-toggle="tooltip">{{ $bus->bus_name }}</a></td>
                        <td>{{ $bus->plat_no }}</td>
                        <td>{{ $bus->no_mesin }}</td> 
                        <td>{{ $bus->total_seats }}</td>
                        <td>{{ $bus->updated_at }}</td>
                        <td>@if($bus->status == 1)
                          Pribadi
                        @else
                          Institusi
                        @endif
                        </td>
                        <td>{{ $bus->pabrik }}</td>
                        <td>{{ $bus->jenis }}</td> 
                        
                      </tr>
                    @endforeach
                </tbody>
              </table>
              @endif 
                 </div>
                </div>
                {!! $buses->render() !!}
              </div>
            </div>
            </div>
            </div>
            </div>
@endsection