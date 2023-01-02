@include('layouts.app')
@include('admin.message')

<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
    <div class="modal-header">
    <h2 class="modal-title" id="exampleModalLongTitle" align="center">
        <i class="">Update Bus</i></h2>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
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

