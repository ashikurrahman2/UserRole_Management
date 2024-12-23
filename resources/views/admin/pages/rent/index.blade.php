@extends('layouts.admin')
@section('admin_content')
<div class="pc-container">
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center justify-content-between">
                    <div class="col-sm-auto">
                        <div class="page-header-title">
                            <h5 class="mb-0">Rent</h5>
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <ul class="breadcrumb">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">+ Add New</button>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
      <div class="row">
        <!-- HTML5 Export Buttons table start -->
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header table-card-header">
              <h5>All Rent list here</h5>
            </div>
            <div class="card-body">
              <div class="dt-responsive table-responsive">
                <table id="" class="table table-striped table-bordered nowrap table-sm ytable">
                  <thead>
                    <tr>
                      <th>SL</th>
                      <th>Rentproperty ID</th>
                      <th>Rentproperty Type</th>
                      <th>Rentproperty Status</th>
                      <th>Rentproperty Price</th>
                      <th>Rent Rooms</th>
                      <th>Bed Rooms</th>
                      <th>Bath Rooms</th>
                      <th>Garages</th>
                      <th>Build Up</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- Data populated by DataTables via AJAX -->
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>SL</th>
                        <th>Rentproperty ID</th>
                        <th>Rentproperty Type</th>
                        <th>Rentproperty Status</th>
                        <th>Rentproperty Price</th>
                        <th>Rent Rooms</th>
                        <th>Bed Rooms</th>
                        <th>Bath Rooms</th>
                        <th>Garages</th>
                        <th>Build Up</th>
                        <th>Action</th>
                      </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div><!-- HTML5 Export Buttons end -->

      </div>
      <!-- [ Main Content ] end -->
    </div>
</div>
  <!-- Insert Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="myLargeModalLabel">Add New Rent</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('rent.store')}}" method="post" id="add-form">
              @csrf
              <div class="modal-body">
                <div class="form-group">
                  <label for="rentproperty_id" class="col-form-label pt-0">Rentproperty ID<sup class="text-size-20 top-1">*</sup></label>
                    <input type="text" class="form-control" id="rentproperty_id" name="rentproperty_id" required>
                    <small id="emailHelp" class="form-text text-muted">This is your rent property</small>
                </div>

                <div class="form-group">
                    <label for="rentproperty_type" class="col-form-label pt-0">Rentproperty Type<sup class="text-size-20 top-1">*</sup></label>
                      <input type="text" class="form-control" id="rentproperty_type" name="rentproperty_type" required>
                      <small id="emailHelp" class="form-text text-muted">This is your rent</small>
                  </div>

                  <div class="form-group">
                    <label for="rentproperty_status" class="col-form-label pt-0">Rentproperty Status<sup class="text-size-20 top-1">*</sup></label>
                      <input type="text" class="form-control" id="rentproperty_status" name="rentproperty_status" required>
                      <small id="emailHelp" class="form-text text-muted">This is your rent</small>
                  </div>

                  <div class="form-group">
                    <label for="rentproperty_price" class="col-form-label pt-0">Rentproperty Price<sup class="text-size-20 top-1">*</sup></label>
                      <input type="text" class="form-control" id="rentproperty_price" name="rentproperty_price" required>
                      <small id="emailHelp" class="form-text text-muted">This is your rent</small>
                  </div>

                  <div class="form-group">
                    <label for="rent_rooms" class="col-form-label pt-0">Rent Rooms<sup class="text-size-20 top-1">*</sup></label>
                      <input type="number" class="form-control" id="rent_rooms" name="rent_rooms" required>
                      <small id="emailHelp" class="form-text text-muted">Must be integer</small>
                  </div>

                  <div class="form-group">
                    <label for="bed_rooms" class="col-form-label pt-0">Bed Rooms<sup class="text-size-20 top-1">*</sup></label>
                      <input type="number" class="form-control" id="bed_rooms" name="bed_rooms" required>
                      <small id="emailHelp" class="form-text text-muted">Must be integer</small>
                  </div>

                  <div class="form-group">
                    <label for="bath_rooms" class="col-form-label pt-0">Bath Rooms<sup class="text-size-20 top-1">*</sup></label>
                      <input type="number" class="form-control" id="bath_rooms" name="bath_rooms" required>
                      <small id="emailHelp" class="form-text text-muted">Must be integer</small>
                  </div>

                  <div class="form-group">
                    <label for="garages" class="col-form-label pt-0">Garages<sup class="text-size-20 top-1">*</sup></label>
                      <input type="number" class="form-control" id="garages" name="garages" required>
                      <small id="emailHelp" class="form-text text-muted">Must be integer</small>
                  </div>

                  <div class="form-group">
                    <label for="build_up" class="col-form-label pt-0">Build Up<sup class="text-size-20 top-1">*</sup></label>
                      <input type="date" class="form-control" id="build_up" name="build_up" required>
                      <small id="emailHelp" class="form-text text-muted">Must be date</small>
                  </div>

                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary"> <span class="d-none"> loading ......</span> Submit</button>
                </div>
              </div>
            </form>
        </div>
    </div>              
</div>

 <!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="editModalLabel">Edit rent</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <!-- Edit form content will be loaded here -->
          </div>
      </div>
  </div>
</div>
  <!-- Script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script type="text/javascript">
    $(function rent(){
      var table=$('.ytable').DataTable({
        processing: true,
            serverSide: true,
            ajax: "{{ route('rent.index') }}",
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'rentproperty_id', name: 'rentproperty_id' },
                { data: 'rentproperty_type', name: 'rentproperty_type' },
                { data: 'rentproperty_status', name: 'rentproperty_status' },
                { data: 'rentproperty_price', name: 'rentproperty_price' },
                { data: 'rent_rooms', name: 'rent_rooms' },
                { data: 'bed_rooms', name: 'bed_rooms' },
                { data: 'bath_rooms', name: 'bath_rooms' },
                { data: 'garages', name: 'garages' },
                { data: 'build_up', name: 'build_up' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
      });
    });
// For Edit property 
    $('body').on('click', '.edit', function() {
        let id = $(this).data('id');
        $.get("rent/" + id + "/edit", function(data) {
            $('.modal-body').html(data);
        });
    });

  //dropify image
 
  </script>
  
@endsection