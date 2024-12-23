<form action="{{ route('rent.update', $rent->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="rentproperty_id" class="col-form-label pt-0">Rentproperty ID<sup class="text-size-20 top-1">*</sup></label>
          <input type="text" class="form-control" id="rentproperty_id" name="rentproperty_id" value="{{ $rent->rentproperty_id }}" required>
          <small id="emailHelp" class="form-text text-muted">This is your rent property</small>
      </div>

      <div class="form-group">
          <label for="rentproperty_type" class="col-form-label pt-0">Rentproperty Type<sup class="text-size-20 top-1">*</sup></label>
            <input type="text" class="form-control" id="rentproperty_type" name="rentproperty_type" value="{{ $rent->rentproperty_type }}" required>
            <small id="emailHelp" class="form-text text-muted">This is your rent</small>
        </div>

        <div class="col-md-12">
          <div class="mb-3">
              <label class="form-label">Rentproperty Description</label>
              <textarea class="form-control textarea" name="rent_description" id="summernote" rows="4" >{{ $rent->rent_description }}</textarea> 
          </div>
      </div>

        <div class="form-group">
          <label for="rentproperty_status" class="col-form-label pt-0">Rentproperty Status<sup class="text-size-20 top-1">*</sup></label>
            <input type="text" class="form-control" id="rentproperty_status" name="rentproperty_status" {{ $rent->rentproperty_status }} required>
            <small id="emailHelp" class="form-text text-muted">This is your rent</small>
        </div>

        <div class="form-group">
          <label for="rentproperty_price" class="col-form-label pt-0">Rentproperty Price<sup class="text-size-20 top-1">*</sup></label>
            <input type="text" class="form-control" id="rentproperty_price" name="rentproperty_price" value="{{ $rent->rentproperty_price }}" required>
            <small id="emailHelp" class="form-text text-muted">This is your rent</small>
        </div>

        <div class="form-group">
          <label for="rent_rooms" class="col-form-label pt-0">Rent Rooms<sup class="text-size-20 top-1">*</sup></label>
            <input type="number" class="form-control" id="rent_rooms" name="rent_rooms" value="{{ $rent->rent_rooms }}" required>
            <small id="emailHelp" class="form-text text-muted">Must be integer</small>
        </div>

        <div class="form-group">
          <label for="bed_rooms" class="col-form-label pt-0">Bed Rooms<sup class="text-size-20 top-1">*</sup></label>
            <input type="number" class="form-control" id="bed_rooms" name="bed_rooms" value="{{ $rent->bed_rooms }}" required>
            <small id="emailHelp" class="form-text text-muted">Must be integer</small>
        </div>

        <div class="form-group">
          <label for="bath_rooms" class="col-form-label pt-0">Bath Rooms<sup class="text-size-20 top-1">*</sup></label>
            <input type="number" class="form-control" id="bath_rooms" name="bath_rooms" value="{{ $rent->bath_rooms }}" required>
            <small id="emailHelp" class="form-text text-muted">Must be integer</small>
        </div>

        <div class="form-group">
          <label for="garages" class="col-form-label pt-0">Garages<sup class="text-size-20 top-1">*</sup></label>
            <input type="number" class="form-control" id="garages" name="garages" value="{{ $rent->garages }}" required>
            <small id="emailHelp" class="form-text text-muted">Must be integer</small>
        </div>

        <div class="form-group">
          <label for="build_up" class="col-form-label pt-0">Build Up<sup class="text-size-20 top-1">*</sup></label>
            <input type="date" class="form-control" id="build_up" name="build_up" value="{{ $rent->build_up }}" required>
            <small id="emailHelp" class="form-text text-muted">Must be date</small>
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
  