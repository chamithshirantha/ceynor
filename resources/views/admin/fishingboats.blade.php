@extends('admin.layouts')

@section('content')


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.min.js"></script>


@if (Session::has('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <i class="fa fa-times"></i>
        </button>
        <strong>Success !</strong> {{ session('success') }}
    </div>
@endif

@if (Session::has('error'))
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <i class="fa fa-times"></i>
        </button>
        <strong>Error !</strong> {{ session('error') }}
    </div>
@endif

<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Fishing Boats</h1>
    <button type="button" id="add" data-bs-toggle="modal" data-bs-target="#addnew" class="btn btn-primary pull-right"> ADD NEW</button>

</div>

{{-- <div class="row">
    <div class="col-md-10 col-md-offset-1">
        
        <button type="button" id="add" data-bs-toggle="modal" data-bs-target="#addnew" class="btn btn-primary pull-right"> Member</button>
       
    </div>
</div> --}}

<!-- Add Modal Start-->
<div class="modal fade" id="addnew" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div id="errorMessage" class="alert alert-warning d-none"></div>
        <div class="modal-body">
            <form action="{{ route('fishingboat.save') }}" id="addForm" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="mb-3">
                    <label for="boatname">Boat Name</label>
                    <input type="text" name="boatname" class="form-control" required>
                </div>

                <div class="mb-3">
                  <label for="image" class="form-label">Choose Image</label>
                  <input class="form-control" type="file" name="image" required>
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
                    <div class="form-group col-md-4">
                      <label for="price">Price</label>
                      <input type="text" class="form-control" name="price">
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

<!-- Add end -->



<!-- Edit Modal Start-->

<div class="modal fade" id="editnew" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div id="errorMessage" class="alert alert-warning d-none"></div>
      <div class="modal-body">
          <form action="" id="editForm" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="mb-3">
                  <label for="boatname">Boat Name</label>
                  <input class="form-control" type="text" name="boatname" id="boatname" multiple required>
              </div>

              <div class="mb-3">
                <label for="image" class="form-label">Choose Image</label>
                <input class="form-control" type="text" id="image_show" name="image" required>
               
              </div>

              <div class="form-group">
                  <label for="description">Short Description</label>
                  <textarea class="form-control" id="discription" name="discription" rows="3"></textarea>
              </div>
            
              
              <div class="mb-3">
                  <label for="lastname">Specification</label>
              </div>

              <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="length">Length</label>
                    <input type="text" class="form-control" name="length" id="length">
                  </div>

                  <div class="form-group col-md-4">
                    <label for="Beam">Beam</label>
                    <input type="text" class="form-control" name="beam"  id="beam">
                  </div>

                  <div class="form-group col-md-4">
                      <label for="length">Draft</label>
                      <input type="text" class="form-control" name="draft" id="draft">
                    </div>
                </div>


                <div class="form-row">                  
                  <div class="form-group col-md-4">
                      <label for="Main Hull Beam">Main Hull Beam</label>
                      <input type="text" class="form-control" name="mainhullbeam" id="mainhullbeam">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="fuel">Fuel</label>
                    <input type="text" class="form-control" name="fuel" id="fuel">
                  </div>

                  <div class="form-group col-md-4">
                    <label for="water">Water</label>
                    <input type="text" class="form-control" name="water" id="water">
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="fuel">Seating Capacity</label>
                    <input type="text" class="form-control" name="seating_capacity" id="seating_capacity">
                  </div>

                  <div class="form-group col-md-4">
                    <label for="Speed">Speed</label>
                    <input type="text" class="form-control" name="speed" id="speed">
                  </div>

                  <div class="form-group col-md-4">
                      <label for="Beds">Beds</label>
                      <input type="text" class="form-control" name="beds" id="beds">
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="Hull Type">Hull Type</label>
                    <input type="text" class="form-control" name="hulltype" id="hulltype">
                  </div>
                  <div class="form-group col-md-4">
                      <label for="fish hold capacity">Fish hold capacity</label>
                      <input type="text" class="form-control" name="fish_hold_capacity" id="fish_hold_capacity">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" name="price" id="price">
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

@section('table')
<div class="container-fluid">

  

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">DataTables of Fishing Boats</h6>
      </div>
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                          <th>Boat Name</th>
                          <th><img src="{{ asset('images\fishingboats\1675017520.jpg') }}"></th>
                          <th>Short Description</th>
                          <th>Length</th>
                          <th>Beam</th>
                          <th>Draft</th>
                          <th>Main Hull Beam</th>
                          <th>Fuel</th>
                          <th>Water</th>
                          <th>Seating Capacity</th>
                          <th>Speed</th>
                          <th>Bed</th>
                          <th>Hull Type</th>
                          <th>Fish Hold Capacity</th>
                          <th>Price</th>
                          
                      </tr>
                  </thead>
                  
                  <tbody>
                    
                 
                  </tbody>

                  
              </table>
          </div>
      </div>
  </div>

</div>
@endsection



@section('scripts')


<script type="text/javascript">

    $(document).ready(function(){
// show data 
      fetchData();

        function fetchData() {
            $.ajax({
                type: "GET",
                url: "/admin/fishingboats/fetch-boat",
                dataType: "json",
                success: function (response) {
                    // console.log(response.boats);
                    $('tbody').html("");
                    $.each(response.boats, function (key, item) {
                        $('tbody').append('<tr>\
                            <td>' + item.boat_name + '</td>\
                            <td> <img width="35px" height="12px" src="public\\images\\fishingboats\\'  + item.image + '" alt="" /></td>\
                            <td>' + item.short_description + '</td>\
                            <td>' + item.length + '</td>\
                            <td>' + item.beam + '</td>\
                            <td>' + item.draft + '</td>\
                            <td>' + item.main_hull_beam + '</td>\
                            <td>' + item.fuel + '</td>\
                            <td>' + item.water + '</td>\
                            <td>' + item.seating_capacity + '</td>\
                            <td>' + item.speed + '</td>\
                            <td>' + item.beds + '</td>\
                            <td>' + item.hull_type + '</td>\
                            <td>' + item.fish_hold_capacity + '</td>\
                            <td>' + item.price + '</td>\
                            <td><button type="button" value="' + item.id + '" class="btn btn-primary editbtn btn-sm">Edit</button></td>\
                            <td><button type="button" value="' + item.id + '" class="btn btn-danger deletebtn btn-sm">Delete</button></td>\
                        \</tr>');
                    });
                    
                    
                }
            });
        }
      

      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      
      
    // $('#addForm').on('submit', function(e) {
    //   e.preventDefault();
    //   var form = $(this).serialize();
    //   var url = $(this).attr('action');
    //   $.ajax({
    //     type: 'POST',
    //     url: "admin/fishingboats/save",
    //     data: form,
    //     dataType: 'json',
    //     success: function () {
    //       $('#addnew').modal('hide');
    //       $('#addForm')[0].reset();
    //     }
    //   });
        
    //   });


    // $('#addForm').on('submit', function(event){
    //   event.preventDefault();
    //   $.ajax({
    //   url:"/admin/fishingboats/save",
    //   method:"POST",
    //   data:new FormData(this),
    //   dataType:'JSON',
    //   contentType: false,
    //   cache: false,
    //   processData: false,
    //   success:function()
    //   {
    //     $('.addnew').modal('hide');
    //     $('#addForm')[0].reset();
        
    //   }
    //   })
    // });

// save data
    $('#addForm').submit(function(e) {
        e.preventDefault();
        let formData = new FormData(this);
        $('#image-input-error').text('');

        $.ajax({
            type:'POST',
            url: "{{ route('fishingboat.save') }}",
            data: formData,
            contentType: false,
            processData: false,
            success: (response) => {
                if (response) {
                    this.reset();
                    alert('Image has been uploaded successfully');
                    fetchData();
                    $('#addnew').modal('hide');
                    $('#addForm')[0].reset();
                    
                }
            },
            error: function(response){
                $('#image-input-error').text(response.responseJSON.message);
            }
       });
    });


    //edit data


    $(document).on('click', '.editbtn', function (e) {
            e.preventDefault();
            var boat_id = $(this).val();
            // alert(baot_id);
            $('#editnew').modal('show');
            $.ajax({
                type: "GET",
                url: "/admin/fishingboats/edit/" + boat_id,
                success: function (response) {

                  $('#boatname').val(response.boat.boat_name);
                  $('#discription').val(response.boat.short_description);
                  $('#length').val(response.boat.length);
                  $('#beam').val(response.boat.beam);
                  $('#draft').val(response.boat.draft);
                  $('#mainhullbeam').val(response.boat.main_hull_beam);
                  $('#fuel').val(response.boat.fuel);
                  $('#water').val(response.boat.water);
                  $('#seating_capacity').val(response.boat.seating_capacity);
                  $('#speed').val(response.boat.speed);
                  $('#beds').val(response.boat.beds);
                  $('#hulltype').val(response.boat.hull_type);
                  $('#fish_hold_capacity').val(response.boat.fish_hold_capacity);
                  $('#price').val(response.boat.price);
                
                  
                }
            });
            

        });











      
    });
  
  

  

  

  // $(document).on('click', '.edit', function (event) {
  //           event.preventDefault();
  //           var id = $(this).data('id');
  //           const firstname = $(this).data('first');
  //           var lastname = $(this).data('last');

  //           $('#editmodal').modal('show');

  //           console.log(id);
  //           console.log(firstname);
  //           $('#firstname').val(firstname);
  //           $('#lastname').val(lastname);
  //           $('#memid').val(id);
  //       });


  //popu message
  


</script>
    
@endsection