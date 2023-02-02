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
          <form id="editForm"  enctype="multipart/form-data">
            @csrf

            <input type="hidden"  id="boat_id" name="boat_id"  />
              <div class="mb-3">
                  <label for="boatname">Boat Name</label>
                  <input class="form-control" type="text" name="boatname" multiple required>
              </div>

              <div class="mb-3">
                <label for="image" class="form-label">Choose Image</label>
                <input class="form-control" type="file"  name="image">
                <br>
                
                <img src="" class="img-fluid"  width="" height="100">
                <br>
               
              </div>

              <div class="form-group">
                  <label for="description">Short Description</label>
                  <textarea class="form-control" name="description" rows="3"></textarea>
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
                      <input type="text" class="form-control" name="c" id="beds">
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
        <button type="submit" class="btn btn-primary update_student">Update</button>
      </form>
      </div>
    </div>
  </div>
</div>


<!-- Edit Modal End-->




<!-- Delete Modal Start-->

{{-- <div class="modal fade" id="deletemodel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-body">
          
           <h4>Are you sure ? You want to delete this data ?</h4>
           <input type="text" id="delete_boat_id">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary delete_boat">Delete</button>
      
      </div>
    </div>
  </div>
</div> --}}


<div class="modal fade" id="deletemodel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div id="errorMessage" class="alert alert-warning d-none"></div>
      <div class="modal-body">
        <h4> You want to delete this data ?</h4>
           <input type="hidden" id="delete_boat_id">
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary delete_boat">Delete</button>
      </form>
      </div>
    </div>
  </div>
</div>

<!-- Delete Modal End-->


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
                          <th>Image</th>
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
                          <th colspan="2">Action</th>
                     
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
                url: "{{URL('/admin/fishingboats/fetch-boat/')}}",
                dataType: "json",
                success: function (response) {
                    // console.log(response.boats);
                    $('tbody').html("");
                    $.each(response.boats, function (key, item) {
                        $('tbody').append('' 
                        +'<tr><td> '+ item.boat_name +' </td>' +
                        '<td>'+'<img src=../uploads/fishingboats/'+item.image +' height="60px"></td>'+
                        '<td>'+ item.short_description +' </td>'+
                        '<td>'+ item.length +' </td>'+
                        '<td>'+ item.beam +' </td>'+
                        '<td>'+ item.draft +' </td>'+
                        '<td>'+ item.main_hull_beam +' </td>'+
                        '<td>'+ item.fuel +' </td>'+
                        '<td>'+ item.water +' </td>'+
                        '<td>'+ item.seating_capacity +' </td>'+
                        '<td>'+ item.speed +' </td>'+
                        '<td>'+ item.beds +' </td>'+
                        '<td>'+ item.hull_type +' </td>'+
                        '<td>'+ item.fish_hold_capacity +' </td>'+
                        '<td>'+ item.price +' </td>'+
                        '<td>'+ '<button type="button" value="' + item.id + '" class="btn btn-warning editbtn btn-circle"><i class="fas fa-edit"></i></button>' +' </td>'+
                        '<td>'+ '<button type="button" value="' + item.id + '" class="btn btn-danger deletebtn btn-circle"><i class="fas fa-trash"></i></button>' +' </td>  </tr>'
                        );
                    });
                    
                    
                }
            });
        }
      

      
      
      
   

// save data
    $('#addForm').submit(function(e) {
        e.preventDefault();
        let formData = new FormData(this);
        $('#image-input-error').text('');

        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

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
            var url = "{{URL('/admin/fishingboats/edit/')}}";
            var dltUrl = url+"/"+boat_id;
            // alert(baot_id);
            $('#editnew').modal('show');
            $.ajax({
                type: "GET",
                url: dltUrl,
                success: function (response) {

                  console.log(response);

                  $("input[name='boatname']").val(response.boat.boat_name);
                  $("textarea[name='description']").val(response.boat.short_description);
                  // $('#image').val(response.boat.image);
                  $("input[name='image']").siblings("img").attr("src", "../uploads/fishingboats/"+response.boat.image);
                  $("input[name='length']").val(response.boat.length);
                  $("input[name='beam']").val(response.boat.beam);
                  $("input[name='draft']").val(response.boat.draft);
                  $("input[name='mainhullbeam']").val(response.boat.main_hull_beam);
                  $("input[name='fuel']").val(response.boat.fuel);
                  $("input[name='water']").val(response.boat.water);
                  $("input[name='seating_capacity']").val(response.boat.seating_capacity);
                  $("input[name='speed']").val(response.boat.speed);
                  $("input[name='beds']").val(response.boat.beds);
                  $("input[name='hulltype']").val(response.boat.hull_type);
                  $("input[name='fish_hold_capacity']").val(response.boat.fish_hold_capacity);
                  $("input[name='price']").val(response.boat.price);
                  $("input[name='boat_id']").val(boat_id);
                
                  
                }
            });
            

        });

        //update



      $(document).on('submit', '#editForm', function (e) {
            e.preventDefault();

           
            var id = $('#boat_id').val();
            // alert(id);
            let EditFormData = new FormData($('#editForm')[0]);

        
            var url = "{{URL('/admin/fishingboats/update/')}}";
            var dltUrl = url+"/"+id;

            $.ajax({
              type: "POST",
              url: dltUrl,
              data: EditFormData,
              contentType:false,
              processData:false,
              success: (response) => {
                if (response) {
                    this.reset();
                    alert('Update has been successfully');
                    fetchData();
                    $('#editnew').modal('hide');
                    $('#editForm')[0].reset();
                    
                }
                
              }
            });
            

        });


        $(document).on('click', '.deletebtn', function (e) {
          e.preventDefault();
          var id = $(this).val();
          $('#deletemodel').modal('show');
          $('#delete_boat_id').val(id);
        });
        $(document).on('click', '.delete_boat', function (e) {
          e.preventDefault();

          var id = $('#delete_boat_id').val();
          var url = "{{URL('/admin/fishingboats/delete/')}}";
          var dltUrl = url+"/"+id;

          $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

          $.ajax({
            type: "DELETE",
            url: dltUrl,
            contentType:false,
            processData:false,
            dataType: "json",
            success: (response) => {
                if (response.status == 200) {
                    alert('Delete has been successfully');
                    fetchData();
                    $('#deletemodel').modal('hide');
                    
                    
                }
                
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