<div class="m-portlet m-portlet--full-height  m-portlet--unair">
  <div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Edit Slider Images
				</h3>
			</div>
		</div>
  </div>

  <div class="m-portlet__body">
    <div class="images-gallery">

        <ul id="images">

          <li data-id="5">
            <a href="images/BMW-TA.jpg" class="thumbnail">
              <img src="images/BMW-TA.jpg" alt="" class="img-fluid">
            </a>
            <span class="delete-image"><i class="flaticon-delete"></i></span>
          </li>

          <li data-id="5">
            <a href="images/BMW-TA.jpg" class="thumbnail">
              <img src="images/BMW-TA.jpg" alt="" class="img-fluid">
            </a>
            <span class="delete-image"><i class="flaticon-delete"></i></span>
          </li>

          <li data-id="5">
            <a href="images/BMW-TA.jpg" class="thumbnail">
              <img src="images/BMW-TA.jpg" alt="" class="img-fluid">
            </a>
            <span class="delete-image"><i class="flaticon-delete"></i></span>
          </li>

          <li data-id="5">
            <a href="images/BMW-TA.jpg" class="thumbnail">
              <img src="images/BMW-TA.jpg" alt="" class="img-fluid">
            </a>
            <span class="delete-image"><i class="flaticon-delete"></i></span>
          </li>

          <li data-id="5">
            <a href="images/BMW-TA.jpg" class="thumbnail">
              <img src="images/BMW-TA.jpg" alt="" class="img-fluid">
            </a>
            <span class="delete-image"><i class="flaticon-delete"></i></span>
          </li>

          <li data-id="5">
            <a href="images/BMW-TA.jpg" class="thumbnail">
              <img src="images/BMW-TA.jpg" alt="" class="img-fluid">
            </a>
            <span class="delete-image"><i class="flaticon-delete"></i></span>
          </li><li data-id="5">
            <a href="images/BMW-TA.jpg" class="thumbnail">
              <img src="images/BMW-TA.jpg" alt="" class="img-fluid">
            </a>
            <span class="delete-image"><i class="flaticon-delete"></i></span>
          </li>

          <li data-id="5">
            <a href="images/BMW-TA.jpg" class="thumbnail">
              <img src="images/BMW-TA.jpg" alt="" class="img-fluid">
            </a>
            <span class="delete-image"><i class="flaticon-delete"></i></span>
          </li>
        </ul>

    </div>

    <div id="fileuploader">Upload</div>
    <div id="upload" class="btn btn-primary">
      upload
    </div>
  </div>
</div>

<div class="m-portlet m-portlet--full-height  m-portlet--unair">
  <div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Edit Homepage Content
				</h3>
			</div>
		</div>
  </div>

  <div class="m-portlet__body">
    <div class="form-group m-form__group">

      <form action="home-page_data.php" id="welcome_message_form" method="post">
        <label for="exampleTextarea">Edit Welcome Message</label>
        <textarea class="form-control m-input" name="welcome_message" id="exampleTextarea" rows="7">
          Lorem ipsum dolor sit amet, falli tollit cetero te eos. Ea ullum liber aperiri mi, impetus ate philosophia ad duo, quem regione ne ius. Vis quis lobortis dissentias ex, in du aft philosophia, malis necessitatibus no mei. Volumus sensibus qui ex, eum duis doming ad. Modo liberavisse eu mel, no viris prompta sit. Pro labore sadipscing et. Ne peax egat usu te mel vivendo scriptorem. Pro labore sadipscing et. Ne pertinax egat usu te mel vivendo scriptorem.

          Cum ut tractatos imperdiet, no tamquam facilisi qui. Eum tibique consectetuer in, an referrentur vis, vocent deseruisse ex mel. Sed te idque graecis. Vel ne libris dolores, mel graece mel vivendo scriptorem dolorum.
        </textarea>

        <input type="hidden" name="field_type" value="update_welcome_message" />
        <button class="btn btn-primary submit-btn">Update</button>
      </form>
		</div>

    <hr />

    <div class="form-group m-form__group">

      <form action="home-page_data.php" id="about_us_message_form" method="post">
        <label for="exampleTextarea">Edit About Us Message</label>
        <textarea class="form-control m-input" name="about_us_message" id="exampleTextarea" rows="7">
          This is About us Message
        </textarea>

        <input type="hidden" name="field_type" value="update_about_us_message" />
        <button class="btn btn-primary submit-btn">Update</button>
      </form>
		</div>

    <hr />

    <h3>Edit Statistics</h3>
    <form action="" method="post" id="statistics_form" >
      <div class="row">
          <div class="col-sm-6 col-md-3">
            <div class="form-group m-form__group">
              <label for="Cars_Sold">Cars Sold</label>
  						<input type="number" class="form-control m-input m-input--air" name="cars_sold" id="Cars_Sold" placeholder="Enter Cars Sold">
            </div>
          </div>

          <div class="col-sm-6 col-md-3">
            <div class="form-group m-form__group">
              <label for="Amount_Sold">Amount Sold</label>
  						<input type="number" class="form-control m-input m-input--air" name="amount_sold" id="Amount_Sold" placeholder="Enter Amount Sold">
            </div>
          </div>

          <div class="col-sm-6 col-md-3">
            <div class="form-group m-form__group">
              <label for="Customer_Satisfaction">Customer Satisfaction</label>
  						<input type="number" max="100" class="form-control m-input m-input--air" name="customer_satisfaction" id="Customer_Satisfaction" placeholder="Enter Customer Satisfaction 'Precentage'">
            </div>
          </div>

          <div class="col-sm-6 col-md-3">
            <div class="form-group m-form__group">
              <label for="Oil_Changes">Oil Changes</label>
  						<input type="number" class="form-control m-input m-input--air" name="oil_changes" id="Oil_Changes" placeholder="Enter Oil Changes">
            </div>
          </div>

          <div class="col-sm-6 col-md-3">
            <input type="hidden" name="field_type" value="update_statistics" />
            <button class="btn btn-primary submit-btn">Update</button>
          </div>


      </div>

    </form>

    <hr />

    <h3>Website Info</h3>
    <form action="" method="post" id="info_form" >
      <div class="row">
          <div class="col-sm-6 col-md-3">
            <div class="form-group m-form__group">
              <label for="email">Email Address</label>
              <input type="email" class="form-control m-input m-input--air" name="email" id="email" placeholder="Enter Email Address">
            </div>
          </div>

          <div class="col-sm-6 col-md-3">
            <div class="form-group m-form__group">
              <label for="phone">Phone Number</label>
              <input type="phone" class="form-control m-input m-input--air" name="phone" id="phone" placeholder="Enter Phone Number">
            </div>
          </div>

          <div class="col-sm-6 col-md-3">
            <div class="form-group m-form__group">
              <label for="address">Adrress</label>
              <input type="text" max="100" class="form-control m-input m-input--air" name="address" id="address" placeholder="Enter Address">
            </div>
          </div>

          <div class="col-sm-6 col-md-3">
            <div class="form-group m-form__group">
              <label for="map_loc">Map Location</label>
              <input type="text" class="form-control m-input m-input--air" name="map_loc" id="map_loc" placeholder="Enter Map Location">
            </div>
          </div>

          <div class="col-sm-6 col-md-3">
            <input type="hidden" name="field_type" value="update_info" />
            <button class="btn btn-primary submit-btn">Update</button>
          </div>


      </div>

    </form>


  </div>

</div>
