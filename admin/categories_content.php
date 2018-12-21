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
                                for($i=1;$i<=20;$i++){
                                    echo '<tr data-id="'.$i.'">
                                            <td>Category '.$i.'</td>
                                            </tr>';
                                }
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
            <form class="m-form m-form--fit">
                <div class="m-portlet__body">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Name</label>
                        <div class="col-lg-9">
                            <input class="form-control m-input">
                        </div>
                        
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Description</label>
                        <div class="col-lg-9">
                            <textarea class="form-control md-input" rows="8" style="resize: none;"></textarea>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">Category Image</label>
                        <div class="col-lg-6">
                            <div class="avatar-upload">
                                <div class="avatar-edit">
                                    <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                    <label for="imageUpload"><i class="flaticon-edit"></i></label>
                                </div>
                                <div class="avatar-preview">
                                    <div id="imagePreview" style="background-image: url(images/DuFG605VAAACfJz.jpg);">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                    <div class="m-form__actions m-form__actions--solid">
                        <div class="row">
                            <div class="col-lg-6">
                                <button type="reset" class="btn btn-primary">Save</button>
                                <button type="reset" class="btn btn-secondary">Cancel</button>
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
        <div class="modal fade" id="add_cat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Categories</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="recipient-name" class="form-control-label">Category</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "addnewcategory_model.php" ?>