<form method="POST" action="{{route('admin.update.company',$company->id)}}" class="add-new-user modal-content pt-0" id="jquery-country-form">
    @csrf
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
    <div class="modal-header mb-1">
        <h5 class="modal-title" id="exampleModalLabel">Edit Company</h5>
    </div>
    <div class="modal-body flex-grow-1">
        <div class="form-group">
            <label class="form-label" for="basic-icon-default-fullname">Company Name</label>
            <input type="text" class="form-control dt-full-name @error('name') is-invalid @enderror" id="basic-icon-default-fullname" placeholder="Enter Name" name="name" value="{{old('name',$company->name)}}" />
            @error('name')
                <span class="invalid-feedbacl" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-label" for="status">Status</label>
            <select class="form-control @error('status') is-invalid @enderror" id="status" name="status">
                <option value="" selected disabled>Select Status</option>
                <option value="1" {{ old('status',$company->status) == '1' ? 'selected' : '' }}>Active</option>
                <option value="0" {{ old('status',$company->status) == '0' ? 'selected' : '' }}>Disable</option>
            </select>
            @error('status')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mr-1 data-submit">Update</button>
        <button type="reset" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
    </div>
</form>
