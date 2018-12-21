<div class="m-portlet">
							<div class="m-portlet__head">
								<div class="m-portlet__head-caption">
									<div class="m-portlet__head-title">
										<span class="m-portlet__head-icon m--hide">
											<i class="la la-gear"></i>
										</span>
										<h3 class="m-portlet__head-text">
											Car Information
										</h3>
									</div>
								</div>
							</div>

							<!--begin::Form-->
							<form class="m-form m-form--fit m-form--label-align-right">
								<div class="m-portlet__body">
									<div class="form-group m-form__group row">
										<div class="col-lg-4">
											<label>Name</label>
											<input class="form-control m-input">
										</div>
										<div class="col-lg-4">
											<label>Model</label>
											<input class="form-control m-input" type="number">
										</div>
										<div class="col-lg-4">
											<label>Color</label>
											<input class="form-control m-input">
										</div>
									</div>
									<div class="form-group m-form__group row">
										<div class="col-lg-4">
											<label>Milage</label>
											<input class="form-control m-input">
										</div>
										<div class="col-lg-4">
											<label>Engine</label>
											<input class="form-control m-input" type="number">
										</div>
										<div class="col-lg-4">
											<label>Categories</label>
											<div class="input-group">
												<div class="dropdown bootstrap-select form-control input-group-btn m-bootstrap-select m_ dropup show">
													<select class="form-control m-bootstrap-select m_selectpicker" tabindex="-98">
														<option>Mustard</option>
														<option>Ketchup</option>
														<option>Relish</option>
													</select>
												</div>
												<div class="input-group-append">
													<button class="btn btn-success" data-toggle="modal" data-target="#addnewcategory" type="button">
														<i class="fa fa-plus"></i>
													</button>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group m-form__group row">
										<div class="col-lg-4">
											<label>Condition</label>
											<input class="form-control m-input">
										</div>
										<div class="col-lg-4">
											<label>Doors</label>
											<input class="form-control m-input" type="number">
										</div>
										<div class="col-lg-4">
											<label>Passengers</label>
											<input class="form-control m-input" type="number">
										</div>
									</div>
									<div class="form-group m-form__group row">
										<div class="col-lg-8">
											<label>Overview</label>
											<textarea class="form-control md-input" rows="8" style="resize: none;"></textarea>
										</div>
										<div class="col-lg-4">
											<label>Price</label>
											<div class="input-group">
												<div class="input-group-prepend"><span class="input-group-text" id="basic-addon2">$</span></div>
												<input type="text" class="form-control m-input" placeholder="666.99">
											</div>
										</div>
									</div>
									<div class="form-group m-form__group row">
										<div class="col-lg-4 col-md-9 col-sm-12">
											<label>Upload car images</label>
											<div class="m-dropzone dropzone m-dropzone--success dz-clickable" action="upload.php" id="m-dropzone-three">
												<div class="m-dropzone__msg dz-message needsclick">
													<h3 class="m-dropzone__msg-title">Drop files here or click to upload.</h3>
													<span class="m-dropzone__msg-desc">Only image are allowed for upload</span>
												</div>
											</div>
										</div>
									</div>
									<hr >
									<div class="form-group m-form__group row">
										<div class="col-lg-12">
											<label>Car's Features & Options</label>
											<textarea name="content" class="form-control md-input" data-provide="markdown" rows="10" style="resize: none;"></textarea>
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
					<?php include "addnewcategory_model.php" ?>