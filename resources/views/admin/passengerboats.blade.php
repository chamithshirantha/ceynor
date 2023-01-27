@extends('admin.layouts')

@section('content')


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.min.js"></script>

<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Passenger Boats</h1>
    <button type="button" id="add" data-bs-toggle="modal" data-bs-target="#addnew" class="btn btn-primary pull-right"> ADD NEW</button>

</div>

{{-- <div class="row">
    <div class="col-md-10 col-md-offset-1">
        
        <button type="button" id="add" data-bs-toggle="modal" data-bs-target="#addnew" class="btn btn-primary pull-right"> Member</button>
       
    </div>
</div> --}}


<div class="modal fade" id="addnew" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        
        
        <div id="errorMessage" class="alert alert-warning d-none"></div>
        <div class="modal-body">
            <form action="" id="addForm">

                <div class="mb-3">
                    <label for="boatname">Boat Name</label>
                    <input type="text" name="boatname" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="description">Short Description</label>
                    <textarea class="form-control" name="discription" rows="3"></textarea>
                </div>
              
                
                <div class="mb-3">
                    <label for="lastname">Specification</label>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="length">Length</label>
                      <input type="text" class="form-control" name="length" >
                    </div>

                    <div class="form-group col-md-4">
                      <label for="Beam">Beam</label>
                      <input type="text" class="form-control" name="beam"  >
                    </div>

                    <div class="form-group col-md-4">
                        <label for="length">Draft</label>
                        <input type="text" class="form-control" name="draft" >
                      </div>
                  </div>


                  <div class="form-row">                  
                    <div class="form-group col-md-4">
                        <label for="Main Hull Beam">Main Hull Beam</label>
                        <input type="text" class="form-control" name="mainhullbeam"  >
                    </div>
                    <div class="form-group col-md-4">
                      <label for="fuel">Fuel</label>
                      <input type="text" class="form-control" name="fuel" >
                    </div>

                    <div class="form-group col-md-4">
                      <label for="water">Water</label>
                      <input type="text" class="form-control" name="water"  >
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="fuel">Seating Capacity</label>
                      <input type="text" class="form-control" name="seating_capacity" >
                    </div>

                    <div class="form-group col-md-4">
                      <label for="Speed">Speed</label>
                      <input type="text" class="form-control" name="speed"  >
                    </div>

                    <div class="form-group col-md-4">
                        <label for="Beds">Beds</label>
                        <input type="text" class="form-control" name="beds" >
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="Hull Type">Hull Type</label>
                      <input type="text" class="form-control" name="hulltype"  >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="fish hold capacity">Fish hold capacity</label>
                        <input type="text" class="form-control" name="fish_hold_capacity">
                      </div>
                  </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
        </div>
      </div>
    </div>
</div>
    
@endsection