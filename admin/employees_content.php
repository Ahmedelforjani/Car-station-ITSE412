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
            <button class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill" data-toggle="modal" data-target="#addnewemployee">
              <span>
                <i class="la la-plus"></i>
                <span>
                  New Employee
                </span>
              </span>
            </Button>
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
            Email
            </th >
            <th data-field="f3">
            Phone
            </th>
            <th data-field="f4">
            Job Title
            </th>
            <th data-field="f5">
            Image
            </th>
            <th data-field="f6">
            Actions
            </th>
          </tr>
        </thead>
      <tbody>

        <?php 
          for($i=0; $i<99; $i++){
            echo '<tr>
                      <td>Funk You</td>
                      <td>Funk You</td>
                      <td>Funk You</td>
                      <td>Funk You</td>
                      <td>Funk You</td>
                      <td>Funk You</td>
                  </tr>';
          } 
        ?>
        <?php

        //   $studentmanager = new studentmanager($DB_con,$entity);
        //   $table = '';
        //   $student = $studentmanager->getStaffList();
        //   for ($i=0; $i<count($student); $i++)
        //   {
        //     $table .= '<tr data-userid="'.$student[$i]->getID().'">';
        //     $programentity = $entities->getEntityById($student[$i]->getEntityID());
        //     $table .="<td>".$student[$i]->getFullname()."</td>";
        //     $table .="<td>".$programentity->getArabicName()."</td>";
        //     $table .="<td>".$programentity->getArabicName()."</td>";
        //     $table .='<td><a href="editstudent.php?userid='.$student[$i]->getId().'" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="تعديل">
        //               <i class="la la-edit"></i>
        //               </a></td>';
        //     $table .="</tr>\n";
        //   } 
        //   echo $table;

          ?>
        </tbody>
      </table>
      <!--end: Datatable -->
  </div>
</div>

<?php include "addnewemployee_model.php" ?>