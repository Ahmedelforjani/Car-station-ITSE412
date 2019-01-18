
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
         <form id="add_new_employee"  action="" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <div class="col-lg-6">
                    <label class="form-control-label">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="col-lg-6">
                    <label class="form-control-label">Job Title</label>
                    <input type="text" class="form-control" name="jobTitle">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-6">
                    <label class="form-control-label">Email</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="col-lg-6">
                    <label class="form-control-label">Phone</label>
                    <input type="text" class="form-control" name="phone">
                </div>
            </div>
            <div class="form-group">
            <label class="form-control-label">Upload image</label>
            <div class="form-group m-form__group">
                <label class="form-control-label">Category Image</label>
                  <div class="image">
                    <div class="avatar-upload">

                        <div class="avatar-preview">
                            <input name="employee_image" class="form-control" type='file' id="employee_image" accept=".png, .jpg, .jpeg" />
                            <label for="employee_image"><i class="flaticon-edit"></i></label>
                          <div id="employee_image_preview" style="background-image: url(images/default.png);">
                          </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="modal-footer" >
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary" >Add</button>
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>

