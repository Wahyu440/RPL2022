<div class="modal fade" id="addBus" tabindex="-1" role="dialog" 
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle" align="center">
            <i class="glyphicon glyphicon-log-in">Add New Bus</i></h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form method="post" action="{{ route('bus.store') }}" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <fieldset>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                                <!-- <label for="exampleInputEmail1">Bus Name</label> -->
                                <input name="bus_name" class="form-control" aria-describedby="emailHelp"
                                 placeholder="Enter Bus Name" type="text">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                                <!-- <label for="exampleInputEmail1">Bus Name</label> -->
                                <input name="plat_no" class="form-control" aria-describedby="emailHelp" 
                                placeholder="Enter Plat Number" type="text">
                          </div>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input name="no_mesin" class="form-control" aria-describedby="emailHelp"
                             placeholder="Enter Machine Number" type="text">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input name="total_seats"  class="form-control" aria-describedby="emailHelp"
                             placeholder="Enter Total Seat" type="number">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input name="pabrik" class="form-control" aria-describedby="emailHelp"
                             placeholder="Enter Pabrik" type="text">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <select name="jenis" id="jenis" class="form-control">
                              <option value="" selected="true" disabled="true">Select Type</option>
                              <option value="Normal Deck">Normal Deck</option>
                              <option value="High Decker">High Decker</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input name="status" id="status" aria-describedby="emailHelp" type="checkbox">
                            <label for="status">Institusi</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label class="control-label">Image</label>
                          <input type="file" name="bus_image">
                        </div>
                      </div>
                      </fieldset>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Register Bus</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  <script>
    document.getElementById('select-all').onclick = function() {
    var checkboxes = document.querySelectorAll('input[id="seats"]');
    for (var checkbox of checkboxes) {
      checkbox.checked = this.checked;
    }
  }
 </script>