<div class="modal fade" id="addnewemployee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group row">
                <div class="col-lg-6">
                    <label class="form-control-label">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="col-lg-6">
                    <label class="form-control-label">Job Title</label>
                    <input type="text" class="form-control" name="name">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-6">
                    <label class="form-control-label">Email</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="col-lg-6">
                    <label class="form-control-label">Phone</label>
                    <input type="text" class="form-control" name="name">
                </div>
            </div>
            <div class="form-group">
            <label class="form-control-label">Upload image</label>
                <div class="col-sm-12">
                    <div class="m-dropzone dropzone m-dropzone--primary dz-clickable" action="upload.php" id="m-dropzone-one">
                        <div class="m-dropzone__msg dz-message needsclick">
                            <h3 class="m-dropzone__msg-title">Drop files here or click to upload.</h3>
                            <span class="m-dropzone__msg-desc">Only image are allowed for upload</span>
                        </div>
                    </div>
                </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Add</button>
      </div>
    </div>
  </div>
</div>