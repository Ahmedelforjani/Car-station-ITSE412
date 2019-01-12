						<div class="m-portlet" id="blockui_portlet">
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
							<form class="m-form m-form--fit m-form--label-align-right" id="addnewcar_form" enctype="multipart/form-data"  method="POST" novalidate="novalidate" >
								<div class="m-portlet__body">
									<div class="form-group m-form__group row">
										<div class="col-lg-4 form-group m-form__group ">
											<label>Name</label>
											<input name="name" class="form-control m-input">
										</div>
										<div class="col-lg-4 form-group m-form__group ">
											<label>Model</label>
											<input name="model" class="form-control m-input" type="number">
										</div>
										<div class="col-lg-4 form-group m-form__group ">
											<label>Color</label>
											<input name="color" class="form-control m-input">
										</div>
									</div>
									<div class="form-group m-form__group row">
										<div class="col-lg-4 form-group m-form__group ">
											<label>Milage</label>
											<input name="milage" class="form-control m-input">
										</div>
										<div class="col-lg-4 form-group m-form__group ">
											<label>Engine</label>
											<input name="engine" class="form-control m-input" type="number">
										</div>
										<div class="col-lg-4 form-group m-form__group ">
											<label>Categories</label>
											<div class="dropdown bootstrap-select show-tick form-control m-bootstrap-select">
												<select name="category_id" class="form-control m-bootstrap-select m_selectpicker" tabindex="-98" title="Select Category">
												<?php

													$category_manager = new CategoriesManager();
													$category_manager->loadAllCategories();
													$categories = $category_manager->getAllCategories();
													foreach($categories as $category){
														echo '<option value="'.$category->getCategoryId().'" >'.$category->getCategoryName().'</option>';
													}

												?>
												</select>
											</div>
										</div>
									</div>
									<div class="form-group m-form__group row">
										<div class="col-lg-4 form-group m-form__group ">
											<label>Condition</label>
											<input name="condition" class="form-control m-input">
										</div>
										<div class="col-lg-4 form-group m-form__group ">
											<label>Doors</label>
											<input name="doors" class="form-control m-input" type="number">
										</div>
										<div class="col-lg-4 form-group m-form__group ">
											<label>Passengers</label>
											<input name="passengers" class="form-control m-input" type="number">
										</div>
									</div>
									<div class="form-group m-form__group row">
										<div class="col-lg-4 form-group m-form__group ">
											<label>Price</label>
											<div class="input-group">
												<div class="input-group-prepend"><span class="input-group-text" id="basic-addon2">$</span></div>
												<input name="price" type="text" class="form-control m-input" placeholder="666.99">
											</div>
										</div>
										<div class="col-lg-4 form-group m-form__group ">
											<label for="transmission">Transmission</label>
											<div class="m-radio-inline">
												<label class="m-radio m-radio--solid m-radio--brand">
												<input type="radio" name="transmission" value="Manual" checked> Manual
												<span></span>
												</label>
												<label class="m-radio m-radio--solid m-radio--brand">
												<input type="radio" name="transmission" value="Automatic"> Automatic
												<span></span>
												</label>
											</div>
										</div>
									</div>
									<div class="form-group m-form__group row">
										<div class="col-lg-12">
											<label>Overview</label>
											<textarea name="overview" class="form-control md-input" rows="8" style="resize: none;"></textarea>
										</div>
									</div>
									<hr >
									<div class="form-group m-form__group row">
										<div class="col-lg-12">
											<label>Car's Features & Options</label>
											<div id="options" style="display: none;"></div>
										</div>
									</div>
									<hr >
									<div class="form-group m-form__group">
										<label>Car's images</label>
										<div class="row images">
											<div class="col-lg-3">
												<div class="addImg">ADD IMAGE <i class="la la-plus"></i></div>
											</div>
										</div>
									</div>
								</div>
								<div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
									<div class="m-form__actions m-form__actions--solid">
										<div class="row">
											<div class="col-lg-6">
												<button type="submit" class="btn btn-primary">Save</button>
												<a href="car_inventory.php" class="btn btn-secondary">
													<span>
														<span>Cancel</span>
													</span>
												</a>										
											</div>
											
											<!-- <div class="col-lg-6 m--align-right">
												<button type="reset" class="btn btn-danger">Delete</button>
											</div> -->
										</div>
									</div>
								</div>
							</form>

							<!--end::Form-->
						</div>
