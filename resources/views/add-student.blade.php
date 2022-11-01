@extends('incdashboard/layout')
@section('content')
<div class="page-wrapper">
            <div class="content container-fluid">
               <div class="page-header">
                  <div class="row align-items-center">
                     <div class="col">
                        <h3 class="page-title">Add Students</h3>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="students.html">Students</a></li>
                           <li class="breadcrumb-item active">Add Students</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="card">
                        <div class="card-body">
                           <form class="needs-validation" novalidate action="#">
                              <div class="form-row">
                                  
                                  <div class="col-md-6 mb-3">
                                      <label for="validationCustom01">Family name as appears in password:</label>
                                      <input type="text" class="form-control" id="validationCustom01"
                                          placeholder=""  required>
                                      <div class="valid-feedback">
                                          Looks good!
                                      </div>
                                      <div class="invalid-feedback">
                                              THis field is required.
                                      </div>
                                  </div>
                                  <div class="col-md-6 mb-3">
                                      <label for="validationCustom02">First name as appears in passport:</label>
                                      <input type="text" class="form-control" id="validationCustom02"
                                          placeholder="" value="" required>
                                      <div class="valid-feedback">
                                          Looks good!
                                      </div>
                                      <div class="invalid-feedback">
                                          THis field is required.
                                  </div>
                                  </div>
                                  
                              </div>
                              
                              <div class="form-row">
                                  <div class="form-group col-lg-3">
                                      <label class="col-lg- col-form-label">Select title(Mr/Mrs/Miss/Ms/etc) </label>
                                      <div class="col-lg-  ">
                                          <select class="form-control " required>
                                              <option>- Select -</option>
                                              <option>Option 1</option>
                                              <option>Option 2</option>
                                              <option>Option 3</option>
                                              <option>Option 4</option>
                                              <option>Option 5</option>
                                          </select>
                                      </div>
                                      
                                  </div> 
                                  <div class="form-group col-lg-4 px-4">
                                      <label class="col-lg- col-form-label">Previous family name(if aplicable): </label>
                                      <div class="col-lg-">
                                          <input type="text" class="form-control" required>
                                      </div>
                                      <div class="invalid-feedback">
                                          THis field is required.
                                      </div>
                                      <div class="valid-feedback">
                                          Looks good.
                                      </div>
                                  </div> 
                                  <div class="form-group col-lg-3 ">
                                      <label class=" col-form-label">Date of Birth: </label>
                                      <div class="">
                                          <input type="date" class="form-control" required>
                                      </div>
                                      <div class="invalid-feedback">
                                          THis field is required.
                                      </div>
                                      <div class="valid-feedback">
                                          Looks good.
                                      </div>
                                  </div>
                                  <div class="form-group col-lg-2 ">
                                      <label class=" col-form-label">Gender</label>
                                      <div class="">
                                          <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="gender"
                                                  id="gender_male" value="option1" required>
                                              <label class="form-check-label" for="gender_male">
                                                  Male
                                              </label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="gender"
                                                  id="gender_female" value="option2" required>
                                              <label class="form-check-label" for="gender_female">
                                                  Female
                                              </label>
                                          </div>
                                          <div class="invalid-feedback">
                                              THis field is required.
                                          </div>
                                          <div class="valid-feedback">
                                              Looks good.
                                          </div>
                                      </div>
                                  </div>   
                              </div>

                              <div class="form-row">
                                  <div class="col-md-6 mb-3">
                                      <label for="validationCustom03">Home/parmanent address</label>
                                      <input type="text" class="form-control" id="validationCustom03"
                                          placeholder="" required>
                                      <div class="invalid-feedback">
                                          Please provide a valid city.
                                      </div>
                                      <div class="invalid-feedback">
                                          THis field is required.
                                      </div>
                                      <div class="valid-feedback">
                                          Looks good.
                                      </div>
                                  </div>
                                  <div class="col-md-3 mb-3">
                                      <label for="validationCustom04">City</label>
                                      <input type="text" class="form-control" id="validationCustom04"
                                          placeholder="" required>
                                          <div class="invalid-feedback">
                                              THis field is required.
                                          </div>
                                          <div class="valid-feedback">
                                              Looks good.
                                          </div>

                                  </div>
                                  <div class="col-md-3 mb-3">
                                      <label for="validationCustom05">Postal Code</label>
                                      <input type="text" class="form-control" id="validationCustom05"
                                          placeholder="" required>
                                          <div class="invalid-feedback">
                                              THis field is required.
                                          </div>
                                          <div class="valid-feedback">
                                              Looks good.
                                          </div>
                                  </div>
                              </div>
                              
                              <div class="form-row">
                                  <div class="col-md-3 mb-3">
                                      <label for="validationCustom03">Home Tel no:</label>
                                      <input type="text" class="form-control" id="validationCustom03"
                                          placeholder="" required>
                                          <div class="invalid-feedback">
                                              THis field is required.
                                          </div>
                                          <div class="valid-feedback">
                                              Looks good.
                                          </div>
                                  </div>
                                  <div class="col-md-3 mb-3">
                                      <label for="validationCustom04">Mobile:</label>
                                      <input type="text" class="form-control" id="validationCustom04"
                                          placeholder="" required>
                                          <div class="invalid-feedback">
                                              THis field is required.
                                          </div>
                                          <div class="valid-feedback">
                                              Looks good.
                                          </div>
                                  </div>
                                  <div class="col-md-6 mb-3">
                                      <label for="validationCustom05">Email:</label>
                                      <input type="text" class="form-control" id="validationCustom05"
                                          placeholder="" required>
                                          <div class="invalid-feedback">
                                              THis field is required.
                                          </div>
                                          <div class="valid-feedback">
                                              Looks good.
                                          </div>
                                  </div>
                              </div>

                              <div class="form-row">
                                  <div class="col-md-4 mb-3">
                                      <label for="validationCustom03">Home Tel no:</label>
                                      <div class="col-lg-  ">
                                          <select class="form-control " type="country">
                                              <option>- Select -</option>
                                              <option>Option 1</option>
                                              <option>Option 2</option>
                                              <option>Option 3</option>
                                              <option>Option 4</option>
                                              <option>Option 5</option>
                                          </select>
                                      </div>
                                      <div class="invalid-feedback">
                                          Please provide a valid city.
                                      </div>
                                  </div>
                                  <div class="col-md-4 mb-3">
                                      <label for="validationCustom04">Nationality:</label>
                                      <div class="col-lg-  ">
                                          <select class="form-control " type="country">
                                              <option>- Select -</option>
                                              <option>Option 1</option>
                                              <option>Option 2</option>
                                              <option>Option 3</option>
                                              <option>Option 4</option>
                                              <option>Option 5</option>
                                          </select>
                                      </div>
                                      <div class="invalid-feedback">
                                          Please provide a valid state.
                                      </div>
                                  </div>
                                  <div class="col-md-4 mb-3">
                                      <label for="validationCustom05">Entry date to Uk:</label>
                                      <input type="text" class="form-control" id="validationCustom05"
                                          placeholder="" required>
                                          <div class="invalid-feedback">
                                              THis field is required.
                                          </div>
                                          <div class="valid-feedback">
                                              Looks good.
                                          </div>
                                  </div>
                              </div>
                              
                              <div class="form-group">
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value=""
                                          id="invalidCheck" required>
                                      <label class="form-check-label" for="invalidCheck">
                                          Agree to terms and conditions
                                      </label>
                                      <div class="invalid-feedback">
                                          You must agree before submitting.
                                      </div>
                                  </div>
                              </div>
                              <button class="btn btn-primary" type="submit">Submit form</button>
                          </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
</div>
<script></script>
@endsection
