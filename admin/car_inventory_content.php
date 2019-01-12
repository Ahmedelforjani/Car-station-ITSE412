<div class="m-portlet m-portlet--mobile">
      <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
          <div class="m-portlet__head-title">
            <h3 class="m-portlet__head-text">
              Cars
            </h3>
          </div>
        </div>
      </div>




    <div class="m-portlet__body">
      <!--begin: Search Form -->
      <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
        <div class="row align-items-center">
          <div class="col-xl-8 order-2 order-xl-1">
            <div class="form-group m-form__group row align-items-center">
              <div class="col-md-4">
                <div class="m-input-icon m-input-icon--left">
                  <input type="text" class="form-control m-input m-input--solid" placeholder="Search..." id="generalSearch">
                  <span class="m-input-icon__icon m-input-icon__icon--left">
                    <span>
                      <i class="la la-search"></i>
                    </span>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 order-1 order-xl-2 m--align-right">
            <a href="addnewcar.php" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
              <span>
                <i class="la la-plus"></i>
                <span>
                  New Car
                </span>
              </span>
            </a>
            <div class="m-separator m-separator--dashed d-xl-none"></div>
          </div>
        </div>
      </div>
      <!--end: Search Form -->
      <!--begin: Datatable -->
      <table class="m-datatable" id="html_table" width="100%">
        <thead>
          <tr>
            <th data-field="f1">
            Name
            </th>
            <th data-field="f2">
            Model
            </th >
            <th data-field="f3">
            Color
            </th>
            <th data-field="f4">
            Engine
            </th>
            <th data-field="f5">
            Category
            </th>
            <th data-field="f6">
            Condition
            </th>
            <th data-field="f7">
            Price
            </th>
            <th data-field="f8">
            Actions
            </th>
          </tr>
        </thead>
        <tbody>

        <?php

          $car_manager = new CarsManager();
          $car_manager->loadAllCars();
          echo $car_manager->getCarsHTMLTable();

        ?>

        </tbody>
      </table>
      <!--end: Datatable -->
  </div>
</div>

<?php include "viewcarimages_modal.php" ?>