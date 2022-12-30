{{-- @include('layouts.app') --}}

 <div class="modal fade" tabindex="-1" id="editBus{{ $bus->id }} role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLongTitle" align="center"
        <i class="glyphicon glyphicon-log-in">Update Bus</h2>
        </div>
        <div class="modal-body">

        {!! Form::open(['action' => ['BusController@update', $bus->bus_id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
        {{ csrf_field() }}

        <fieldset>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {{-- <label for="operator_name">Bus Name</label> --}}
                        <input value="{{ $bus->bus_name }}" name="bus_name" id="bus_name" class="form-control" aria-describedby="emailHelp"
                            placeholder="Enter Bus Name" type="text">
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input value="{{$bus->status}}" name="status"  aria-describedby="emailHelp" type="checkbox">
                            <label for="exampleInputEmail1">Available</label>
                        </div>
                </div>
                <div class="row">
                    
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                                <label class="control-label">Image</label>
                                <input value="{{$bus->bus_image}}" type="file" name="bus_image">
                        </div>
                    </div>
                </div>
                
        </fieldset>
        </div>
        <div class="modal-footer">
            <a href="{{ url('/admin/bus') }}" type="button" class="btn btn-danger">Go Back</a>
        <button type="submit" class="btn btn-warning">Update Bus</button>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
        </div>
    </div>
    </div>
</div>

