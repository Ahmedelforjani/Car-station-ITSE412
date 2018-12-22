<div class="row">
    <div class="col-md-4 col-sm-12">
        <div class="m-portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Categories
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item">
                            <button class="m-portlet__nav-link btn btn-success m-btn m-btn--pill" data-toggle="modal" data-target="#addnewcategory">
                                New Category <i class="la la-plus" ></i>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="m-portlet__body">
                <div class="m-scrollable m-scroller ps ps--active-y" data-scrollable="true" style="height: 450px; overflow: hidden;">
                    <table class="table table-hover">
                        <tbody>
                            <?php

                              $category_manager = new CategoriesManager();
                              $category_manager->loadAllCategories();
                              echo $category_manager->getCategoriesHTMLTable();

                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!--end::Form-->
        </div>
    </div>
    <div class="col-md-8 col-sm-12">
        <div class="m-portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <span class="m-portlet__head-icon m--hide">
                            <i class="la la-gear"></i>
                        </span>
                        <h3 class="m-portlet__head-text">
                            Edit Category
                        </h3>
                    </div>
                </div>
            </div>

            <!--begin::Form-->
            <form id="update_cat_form" action="" method="post" enctype="multipart/form-data" class="m-form m-form--fit">
                <div class="m-portlet__body">
                    <div class="form-group m-form__group row">
                        <label class="col-md-3 col-form-label">Name</label>
                        <div class="col-md-9">
                            <input name="category_name" class="form-control m-input">
                        </div>

                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-md-3 col-form-label">Description</label>
                        <div class="col-md-9">
                            <textarea name="category_description" class="form-control md-input" rows="8" style="resize: none;"></textarea>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-md-3 col-form-label">Category Image</label>
                        <div class="col-md-9">
                          <div class="image">
                              <div class="avatar-upload">

                                  <div class="avatar-preview">
                                      <input name="category_image" type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                      <label for="imageUpload"><i class="flaticon-edit"></i></label>
                                    <div id="imagePreview">
                                    </div>
                                  </div>
                              </div>
                          </div>
                        </div>

                    </div>

                    <input id="cat_id" type="hidden" value="" name="cat_id" />
                </div>
                <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                    <div class="m-form__actions m-form__actions--solid">
                        <div class="row">
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                            <div class="col-lg-6 m--align-right">
                                <button type="reset" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <!--end::Form-->
        </div>
    </div>
</div>

<?php include "addnewcategory_model.php" ?>
