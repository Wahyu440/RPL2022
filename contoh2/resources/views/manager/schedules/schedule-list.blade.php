@extends('layouts.headerManager')
@section('content') 
@include('manager.message')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
            <!-- <span class="pull-center">
            <a href="#" data-toggle="modal" data-target="#addSchedule" 
            data-toggle="tooltip" type="button" class="btn btn-sm btn-primary">
            <i class="glyphicon glyphicon-plus"></i> Add New Schedule</a>
            </span>
            <br>
            <br> -->
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Schedules List</h4>
                  <h4 class="card-title pull-right">Today is: {{ date('d-m-Y', time()) }}</h4>
                  <p class="card-category">Search and other methods are to be inserted at this place</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  @if (count($schedules) > 0 ) 
                    <table class="col-md-12">
                      <thead class="text-primary">
                        <th>ID</th>
                        <th>Bus name</th>
                        <th>From</th>
                        <th>To</th>
                        <!-- <th>Checkpoints</th> -->
                        <th>Depart Date</th>
                        <th>Depart Time</th>
                        <th>Return Date</th>
                        {{-- <th>Return Time</th>
                        <th>Booked Date</th> --}}
                        {{-- <th>Price Amount</th> --}}
                        <th>Jenis</th>
                        <!-- <th>Action</th> -->
                      </thead>
                    <tbody>
                    @foreach ( $schedules as $key => $schedule )
                      <tr>
                        <td>{{ ++$key }}</td>
                        <td>
                          @foreach ($buses as $bus)
                            @if ($bus->bus_id == $schedule->bus_id)
                                {{ $bus->bus_name }}
                            @endif
                        @endforeach</td>
                        <td>{{ $schedule->pickup_address }}</td>
                        <td>{{ $schedule->dropoff_address }}</td>
                        <!-- <td>{{ $schedule->pickup_address }}</td> -->
                        <td>{{ $schedule->depart_date }}</td>
                        <td>{{ $schedule->depart_time }}</td>
                        <td>{{ $schedule->return_date }}</td>
                        {{-- <td>{{ $schedule->return_time }}</td>
                        <td>{{ $schedule->created_at }}</td> --}}
                        {{-- <td>{{ $schedule->price }}</td> --}}
                        <td>@if($schedule->status == 1)
                          Institusi
                        @else
                          Pribadi
                        @endif
                        </td>
                        
                      </tr>
                    @endforeach
                </tbody>
              </table>
              @endif 
                 </div>
                </div>
                {!! $schedules->render() !!}
              </div>
            </div>
            </div>
            </div>
            </div>

@endsection