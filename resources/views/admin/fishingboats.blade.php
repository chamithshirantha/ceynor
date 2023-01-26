@extends('admin.layouts')

@section('content')


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.min.js"></script>

<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Fishing Boats</h1>
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
                    <label for="firstname">Firstname</label>
                    <input type="text" name="firstname" class="form-control" placeholder="Input Firstname" required>
                </div>
                <div class="mb-3">
                    <label for="lastname">Lastname</label>
                    <input type="text" name="lastname" class="form-control" placeholder="Input Lastname" required>
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