@include('layouts.app')
@include('admin.message')

<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
    <div class="modal-header">
    <h2 class="modal-title" id="exampleModalLongTitle" align="center">
        <i class="">Update Schedule</i></h2>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="modal-body">



    {!! Form::open(['action' => ['BusScheduleController@update', $schedule->schedule_id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}

    {{ csrf_field() }}
    <fieldset>
        <!-- <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="customer_id">Stations</label>
                    <select name="bus_id" class="form-control">
                            <option value="">Select Station</option>
                            @foreach ($stations as $station)
                            <option value="{{$station->id}}">{{$station->name}}</option>
                            @endforeach
                        </select>
                </div>
            </div>
        </div> -->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                        <label for="bus">Bus </label>
                        <select name="bus_id" class="form-control">
                            <option value="{{ $schedule->bus_id }}">Select Bus</option>
                            @foreach ($buses as $bus)
                            <option value="{{$bus->bus_id}}">{{$bus->bus_name}}</option>
                            @endforeach
                        </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="price" id="price" value="{{ $schedule->price }}">
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                    <label for="depart_date">Depart Date</label>
                    <input name="depart_date" id="depart_date" value="{{ $schedule->depart_date }}" class="form-control" aria-describedby="emailHelp"
                    placeholder="Enter Depart Date" type="date">
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label for="depart_time">Depart Time</label>
                    <input name="depart_time" id="depart_time" value="{{ $schedule->depart_time }}" rows="2" cols="20" class="form-control" 
                    placeholder="Enter Depart Time" type="time">
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                    <label for="return_date">Return Date</label>
                    <input name="return_date" id="return_date" value="{{ $schedule->return_date }}"  class="form-control" aria-describedby="emailHelp"
                    placeholder="Enter Return Date" type="date">
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label for="return_time">Return Time</label>
                    <input name="return_time" id="return_time" value="{{ $schedule->return_time }}" rows="2" cols="20" class="form-control" 
                    placeholder="Enter Return Time" type="time">
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                    <label for="pickup_address">Pickup Address</label>
                    <!-- <input name="pickup_address" value="{{ $schedule->pickup_address }}" class="form-control" aria-describedby="emailHelp"
                    placeholder="Enter Pickup Address" type="text"> -->
                    <select name="pickup_address" class="form-control">
                            <option value="{{ $schedule->pickup_address }}">{{ $schedule->pickup_address }}</option>
                            @foreach ($stations as $station)
                            <option value="{{$station->id}}">{{$station->name}}</option>
                            @endforeach
                        </select>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label for="dropoff_address">Dropoff Address</label>
                    <!-- <input name="dropoff_address" value="{{ $schedule->dropoff_address }}" class="form-control" 
                    placeholder="Enter Dropoff Address" type="text"> -->
                    <select name="dropoff_address" class="form-control">
                            <option value="{{ $schedule->dropoff_address }}">{{ $schedule->dropoff_address }}</option>
                            @foreach ($stations as $station)
                            <option value="{{$station->id}}">{{$station->name}}</option>
                            @endforeach
                        </select>
                </div>
            </div>
            <div class="col-md-6">
          <div class="form-group">
                <label for="sisa_kursi">Sisa Kursi</label>
                <input name="sisa_kursi" value="{{ $schedule->sisa_kursi }}" class="form-control" placeholder="Sisa Kursi" type="text">
            </div>
          </div>
        </div>
      </fieldset>
    </div>
    <div class="modal-footer">
    <a href="{{ url('/admin/bus-schedule') }}" type="button" class="btn btn-sm btn-primary">Go Back</a>
    <button type="submit" class="btn btn-primary">Update Schedule</button>
    {{Form::hidden('_method','PUT')}}
    {{-- {{Form::submit('submit', ['class' => 'btn btn-primary'])}} --}}
    {!! Form::close() !!}
    </div>
</div>
</div>