<div class="modal fade" id="addnewcategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="add_new_cat_form" action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="form-control-label">Name</label>
                <input required type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label class="form-control-label">Description</label>
                <textarea required class="form-control" name="description"></textarea>
            </div>
            <div class="form-group m-form__group">
                <label class="form-control-label">Category Image</label>
                  <div class="image">
                    <div class="avatar-upload">

                        <div class="avatar-preview">
                            <input name="category_image" class="form-control" type='file' id="category_image" accept=".png, .jpg, .jpeg" />
                            <label for="category_image"><i class="flaticon-edit"></i></label>
                          <div id="category_image_preview" style="background-image: url(images/default.png);">
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>


    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button class="btn btn-primary ld-ext-left" id="addBtn" type="submit" form="add_new_cat_form">
          <div class="ld ld-ring ld-spin"></div>
          Add
        </button>
      </div>
    </div>
  </div>
</div>
