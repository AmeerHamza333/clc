@extends('inc-student-dashboard/layout')
@section('content')




        <div class="page-wrapper">
            <div class="content container-fluid">


                <!-- progressbar -->
                <div class="stepper-wrapper">
                    <div class="stepper-item active">
                      <div class="step-counter">1</div>
                      <div class="step-name">First</div>
                    </div>
                    <div class="stepper-item ">
                      <div class="step-counter">2</div>
                      <div class="step-name">Second</div>
                    </div>
                    <div class="stepper-item ">
                      <div class="step-counter">3</div>
                      <div class="step-name">Third</div>
                    </div>
                    <div class="stepper-item">
                      <div class="step-counter">4</div>
                      <div class="step-name">Forth</div>
                    </div>
                  </div>


                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Application For Admission <small class="fs-5" style="font-size:15px">(Higher Education Courses)</small></h3>
                            <small class="fs-5" style="font-size:15px">(Please read the collage prospectus and consult the website before completing this form)</small>

                          
                        </div>
                    </div>
                </div>

                <!-- //**admission form**// -->
                <div class="row">
                    <div class="col-sm-12">

                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-2 font-weight-bold">English Language</h5>
                                <small class="fs-5" style="font-size:15px">You must submit proof of your English language prficiency with this application.</small>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm">
                                        <form class="needs-validation" novalidate>
                                            <div class="form-row">
                                                
                                                <div class="col-md-6 mb-3 row">
                                                    <label for="validationCustom01">Is English your first language?(Please tick the as aplicable)</label>
                                                    <input type="checkbox" class="larger ml-3" id="validationCustom01" required>
                                                </div>
                                               
                                                
                                            </div>

                                            <div class="form-row">
                                                
                                                <div class="col-md- mb-3 row">
                                                    <label for="validationCustom01">Have you attend any course in English language?</label>
                                                    <input type="checkbox" class="larger ml-3" id="validationCustom01" required>Yes,
                                                </div>
                                                <div class="col-md- mb-3 row ml-3">
                                                    <label for="validationCustom01"> if YES please attach evidence </label>
                                                    <input type="checkbox" class="larger ml-3" id="validationCustom01" required>No
                                                </div>
                                               
                                                
                                            </div>

                                            <div class="form-row">
                                                
                                                <div class="col-md- mb-3 row">
                                                    <label for="validationCustom01">Have you taken any English Languages proficiency test?</label>
                                                    <input type="checkbox" class="larger ml-3" id="validationCustom01">Yes,
                                                </div>
                                                <div class="col-md- mb-3 row ml-3">
                                                    <label for="validationCustom01"> if YES please attach evidence </label>
                                                    <input type="checkbox" class="larger ml-3" id="validationCustom01">No
                                                </div>
                                               
                                                
                                            </div>
                                            

                                            <div class="">
                                                <h5 class="card-title mb-2 font-weight-bold">Work Experience<small class="fs-5" style="font-size:15px">(if any)</small></h5>
                                                <small style="font-size:15px">Please give details of work experience, training and employment.</small>
                                                <hr>
                                            </div>
                                            <div> 
                                                <div class="form-row ">
                                                    <div class="form-group col-lg-1">
                                                        <label class="col-lg- col-form-label">Date From<br><small style="font-size:12px">(dd/mm/yy)</small></label>
                                                    </div> 
                                                    <div class="form-group col-lg-1">
                                                        <label class="col-lg- col-form-label">Date to<br><small style="font-size:12px">(dd/mm/yy)</small></label>
                                                    </div> 
                                                    <div class="form-group col-lg-1 ">
                                                        <label class=" col-form-label">FT/PT </label>
                                                        
                                                    </div>
                                                    <div class="form-group col-lg-2 ">
                                                        <label class=" col-form-label">Post held</label>
                                                        
                                                    </div>
                                                    <div class="form-group col-lg-3 ">
                                                        <label class=" col-form-label">Organisation name and address</label>
                                                        
                                                    </div>
                                                    <div class="form-group col-lg-3 ">
                                                        <label class=" col-form-label">Brief description of duties</label>
                                                        
                                                    </div>
                                                       
                                                </div>
                                                <div class="form-row addform">
                                                    <div class="form-group col-lg-1">
                                                        <input type="text" class="form-control" name="datefrom[]" id="validationCustom01"
                                                         required>
                                                    </div> 
                                                    <div class="form-group col-lg-1">
                                                        <input type="text" class="form-control" name="dateto[]" id="validationCustom01"
                                                        placeholder=""  required>                                                    
                                                    </div> 
                                                    <div class="form-group col-lg-1 ">
                                                        <input type="text" class="form-control" name="FT/PTfrom[]" id="validationCustom01"
                                                        placeholder=""  required>                                                    
                                                    </div>
                                                    <div class="form-group col-lg-2 ">
                                                        <input type="text" class="form-control" name="postheld[]" id="validationCustom01"
                                                        placeholder=""  required>                                                    
                                                    </div>
                                                    <div class="form-group col-lg-3">
                                                        <input type="text" class="form-control" name="orgname[]" id="validationCustom01"
                                                        placeholder=""   required>                                                    
                                                    </div>
                                                    <div class="form-group col-lg-3">
                                                        <input type="text" class="form-control" name="briefdis[]" id="validationCustom01"
                                                        placeholder=""   required>                                                    
                                                    </div>
                                                    <div class="form-group col-lg-1">
                                                        <input type="button" class="form-control w-100 bg-success"
                                                            id="addwork" value="+">
                                                    </div> 
                                                </div>
                                            </div>

                                            <div>
                                                <label for="">If curently employed,current employer details:</label>
                                            </div>
                                            <div> 
                                                <div class="form-row">
                                                    <div class="form-group col-lg-1">
                                                        <label class="col-lg- col-form-label">Date From<br><small style="font-size:12px">(dd/mm/yy)</small></label>
                                                    </div> 
                                                    
                                                    <div class="form-group col-lg-2 ">
                                                        <label class=" col-form-label">FT/PT </label>
                                                        
                                                    </div>
                                                    <div class="form-group col-lg-2 ">
                                                        <label class=" col-form-label">Post held</label>
                                                        
                                                    </div>
                                                    <div class="form-group col-lg-3 ">
                                                        <label class=" col-form-label">Organisation name and address</label>
                                                        
                                                    </div>
                                                    <div class="form-group col-lg-3 ">
                                                        <label class=" col-form-label">Brief description of duties</label>
                                                        
                                                    </div>    
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-lg-1">
                                                        <input type="text" class="form-control" name="datefrom[]" id="validationCustom01"
                                                         required>
                                                    </div> 
                                                    <div class="form-group col-lg-2 ">
                                                        <input type="text" class="form-control" name="FT/PTfrom[]" id="validationCustom01"
                                                        placeholder=""  required>                                                    
                                                    </div>
                                                    <div class="form-group col-lg-2 ">
                                                        <input type="text" class="form-control" name="postheld[]" id="validationCustom01"
                                                        placeholder=""  required>                                                    
                                                    </div>
                                                    <div class="form-group col-lg-3">
                                                        <input type="text" class="form-control" name="orgname[]" id="validationCustom01"
                                                        placeholder=""   required>                                                    
                                                    </div>
                                                    <div class="form-group col-lg-3">
                                                        <input type="text" class="form-control" name="briefdis[]" id="validationCustom01"
                                                        placeholder=""   required>                                                    
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

            </div>

            <footer>
                <p>Copyright © 2020.</p>
            </footer>

        </div>



@endsection